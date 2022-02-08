import { ChangeDetectorRef, Component, OnInit, ViewChild } from '@angular/core';
 import { AddComponent } from '../add/add.component';
import {animate, state, style, transition, trigger} from '@angular/animations';
import { MatDialog } from '@angular/material/dialog';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { ImportComponent as ImportRubriquesComponent } from '../import/import.component';
import { _DATA } from './data';
import { Rubrique } from 'app/models/rubrique.model';
import { FuseConfirmationService } from '@fuse/services/confirmation';
import { MatTable } from '@angular/material/table';
import { _DATA_SOCIETE } from '../../societes/list/_data';
import { Societe } from 'app/models/societe.model';
import { SocieteService } from 'app/core/services/societe.service';
import { RubriqueService } from 'app/core/services/rubrique.service';
import { _DATA_RUBRIQUES } from 'app/core/data-test/data-rubriques';

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
  dataSource = [];
  dialogRef: any;
  data:Societe = new Societe({});
  @ViewChild(MatTable) table: MatTable<Rubrique>;
  
  constructor(
    private _fuseConfirmationService: FuseConfirmationService,
    private _matDialog: MatDialog,private _societeService:SocieteService,private rubriqueService:RubriqueService ) { }

  ngOnInit(): void {
      this.data = this._societeService.activeSociete;
      this._updateDataSource();
  }
  _updateDataSource(){

    this.rubriqueService.getAllByCurrentSociete().subscribe(data=>{
        this.dataSource = data;
        this.table.renderRows();
    },err=>{this.dataSource=[];console.error(err)})

  }

  add(): void
  {

      this.dialogRef = this._matDialog.open(AddComponent, {
        data: {
            rubrique: {},
            action: 'new',
        }});

      this.dialogRef.afterClosed()
          .subscribe((response: any) => {
              if ( !response )
              {
                  return;
              }
              this._updateDataSource();
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
           //**********DELETE */
           this.rubriqueService.deleteAllByCurrentSociete().subscribe(data=>{
            console.log(data);
         this._updateDataSource();
        },err=>{
            console.error(err)
        })
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

    this.dialogRef.afterClosed().subscribe((response: any) => {
        if (!response) {
            return;
        }
        this._updateDataSource();
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
        this._updateDataSource();
    });
}

supprimer(rubrique: Rubrique) {
    this.dialogRef = this._fuseConfirmationService.open({
        title: 'Suppression de rubrique',
        message:
            'Voulez-vous supprimer la rubrique ' +
            rubrique.intitule +' ?',
    });
    this.dialogRef.afterClosed().subscribe((response) => {
        console.log(response);
        if (response === 'confirmed') {
           //***DELETE ONE */
           this.rubriqueService.delete(rubrique).subscribe(data=>{
               console.log(data);
            this._updateDataSource();
           },err=>{
               console.error(err)
           })
        }
    });
}
   
}
