import { ChangeDetectorRef, Component, OnInit, ViewChild } from '@angular/core';
 import { AddComponent } from '../add-rubriques/add.component';
import {animate, state, style, transition, trigger} from '@angular/animations';
import { MatDialog } from '@angular/material/dialog';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { ImportComponent as ImportRubriquesComponent } from '../import-rubriques/import.component';
import { _DATA } from './data';
import { _DATA_SOCIETE } from '../list/_data';
import { Rubrique } from 'app/models/rubrique.model';
import { FuseConfirmationService } from '@fuse/services/confirmation';
import { MatTable } from '@angular/material/table';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss'],
  animations: [
    trigger('detailExpand', [
      state('collapsed', style({height: '0px', minHeight: '0'})),
      state('expanded', style({height: '*'})),
      transition('expanded <=> collapsed', animate('225ms cubic-bezier(0.4, 0.0, 0.2, 1)')),
    ]),
  ],
})
export class ListComponent implements OnInit {

  displayedColumns: string[] = ['code', 'sens','intitule', 'type', 'gain','imprimable','actions'];
  dataSource = _DATA;
  dialogRef: any;
  data = _DATA_SOCIETE[0];
  @ViewChild(MatTable) table: MatTable<Rubrique>;
  
  constructor(
    private _changeDetectorRef: ChangeDetectorRef,
    private _activatedRoute: ActivatedRoute,
    private _router: Router,
    private _fuseConfirmationService: FuseConfirmationService,
    private _matDialog: MatDialog, ) { }

  ngOnInit(): void {
  }
 

  add(): void
  {
      this.dialogRef = this._matDialog.open(AddComponent, {
        data: {
            rubrique: {},
            action: 'new',
        }});

      this.dialogRef.afterClosed()
          .subscribe((response: FormGroup) => {
              if ( !response )
              {
                  return;
              }
              this.dataSource.push(response.getRawValue());
              this.table.renderRows();
          });
  }

  
  toutvider() {
    this.dialogRef = this._fuseConfirmationService.open({
        title: 'Suppression de rubrique',
        message:
            'Voulez-vous supprimer toutes les rubriques de votre base de données ?',
    });
    this.dialogRef.afterClosed().subscribe((response) => {
        console.log(response);
        if (response === 'confirmed') {
            this.dataSource = [];
            this.table.renderRows();
        }
    });
}

edit(rubrique: Rubrique): void {
    this.dialogRef = this._matDialog.open(AddComponent, {
        data: {
            rubrique: rubrique,
            action: 'edit',
        },
    });

    this.dialogRef.afterClosed().subscribe((response: FormGroup) => {
        if (!response) {
            return;
        }
        rubrique.code=response.getRawValue().code;
        rubrique.gain=response.getRawValue().gain;
        rubrique.imprimable=response.getRawValue().imprimable;
        rubrique.intitule=response.getRawValue().intitule;
        rubrique.sens=response.getRawValue().sens;
        rubrique.type=response.getRawValue().type;
        this.table.renderRows();
    });
}

importerListeRubriques(): void {
    this.dialogRef = this._matDialog.open(ImportRubriquesComponent, {
        data: this.data,
    });

    this.dialogRef.afterClosed().subscribe((rubriques) => {
        if (!rubriques) {
            return;
        }
        this.dataSource = rubriques;
        console.log(this.dataSource);
        // this.data.rubriques = response.rubriques;
    });
}

supprimer(rubrique: Rubrique) {
    this.dialogRef = this._fuseConfirmationService.open({
        title: 'Suppression de salarié',
        message:
            'Voulez-vous supprimer la rubrique ' +
            rubrique.intitule +' ?',
    });
    this.dialogRef.afterClosed().subscribe((response) => {
        console.log(response);
        if (response === 'confirmed') {
            this.dataSource.splice(
                this.dataSource.findIndex(
                    (s) => s.code == rubrique.code
                ),
                1
            );
            this.table.renderRows();
        }
    });
}
   
}
