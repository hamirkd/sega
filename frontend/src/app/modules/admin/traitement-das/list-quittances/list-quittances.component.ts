import { ChangeDetectorRef, Component, OnInit, ViewChild } from '@angular/core';
 import { AddComponent } from '../add/add.component';
import {animate, state, style, transition, trigger} from '@angular/animations';
import { MatDialog } from '@angular/material/dialog';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { _DATA } from './data';
import { FuseConfirmationService } from '@fuse/services/confirmation';
import { MatTable } from '@angular/material/table';
import { _DATA_SOCIETE } from '../../societes/list/_data';
import { Societe } from 'app/models/societe.model';
import { SocieteService } from 'app/core/services/societe.service';
import { _DATA_RUBRIQUES } from 'app/core/data-test/data-rubriques';
import { DasQuittancesService } from 'app/core/services/das-quittances.service';
import { AnneeService } from 'app/core/services/annee.service';
import { DasQuittances } from 'app/models/das-quittance.model';

@Component({
  selector: 'app-list-quittances',
  templateUrl: './list-quittances.component.html',
  styleUrls: ['./list-quittances.component.scss'],
  animations: [
    trigger('detailExpand', [
      state('collapsed', style({height: '0px', minHeight: '0'})),
      state('expanded', style({height: '*'})),
      transition('expanded <=> collapsed', animate('225ms cubic-bezier(0.4, 0.0, 0.2, 1)')),
    ]),
  ],
})
export class ListQuittanceComponent implements OnInit {

  displayedColumns: string[] = ['mois', 'montant','date_quittance', 'n_quittance', 'nature','actions'];
  dataSource = [];
  dialogRef: any;
  data:Societe = new Societe({});
  @ViewChild(MatTable) table: MatTable<DasQuittances>;
  
  constructor(
    private _fuseConfirmationService: FuseConfirmationService,
    private _matDialog: MatDialog,private _societeService:SocieteService,private dasQuittancesService:DasQuittancesService,private _anneeService:AnneeService ) { }

  ngOnInit(): void {
      this.data = this._societeService.activeSociete;
      this._updateDataSource();
  }
  _updateDataSource(){

    this.dasQuittancesService.getAllByCurrentSociete({societe_id:this._societeService.activeSociete.id,annee:this._anneeService.activeAnnee}).subscribe(data=>{
        this.dataSource = data;
        this.table.renderRows();
    },err=>{this.dataSource=[];console.error(err)})

  }

  add(): void
  {

      this.dialogRef = this._matDialog.open(AddComponent, {
        data: {
            dasQuittances: {},
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

  

edit(rubrique: DasQuittances): void {
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

importerListeDasQuittancess(): void {
    
}

supprimer(quittance: DasQuittances) {
    this.dialogRef = this._fuseConfirmationService.open({
        title: 'Suppression de quittance',
        message:
            'Voulez-vous supprimer la quittance ' +
            quittance.mois +' ?',
    });
    this.dialogRef.afterClosed().subscribe((response) => {
        console.log(response);
        if (response === 'confirmed') {
           //***DELETE ONE */
           this.dasQuittancesService.delete(quittance).subscribe(data=>{
               console.log(data);
            this._updateDataSource();
           },err=>{
               console.error(err)
           })
        }
    });
}
   
}
