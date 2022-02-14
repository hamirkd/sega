import { AfterViewInit, ChangeDetectorRef, Component, OnInit, ViewChild } from '@angular/core';
import { AddComponent } from '../add/add.component';
import {
    animate,
    state,
    style,
    transition,
    trigger,
} from '@angular/animations';
import { MatDialog } from '@angular/material/dialog';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { _DATA_SOCIETE } from '../../societes/list/_data';
import { ImportComponent } from '../import/import.component';
import { FuseConfirmationService } from '@fuse/services/confirmation';
import { Salarie } from 'app/models/salarie.model';
import { MatTable, MatTableDataSource } from '@angular/material/table';
import { MatPaginator } from '@angular/material/paginator';
import { SelectionModel } from '@angular/cdk/collections';
import { SalarieService } from 'app/core/services/salarie.service';
import { SocieteService } from 'app/core/services/societe.service';
import { SalarieComplement } from 'app/models/salarie-complement-1.model';
import { AnneeService } from 'app/core/services/annee.service';

@Component({
    selector: 'app-list',
    templateUrl: './list.component.html',
    styleUrls: ['./list.component.scss'],
    animations: [
        trigger('detailExpand', [
            state('collapsed', style({ height: '0px', minHeight: '0' })),
            state('expanded', style({ height: '*' })),
            transition(
                'expanded <=> collapsed',
                animate('225ms cubic-bezier(0.4, 0.0, 0.2, 1)')
            ),
        ]),
    ],
})
export class ListComponent implements OnInit  , AfterViewInit{
    displayedColumns: string[] = [
        'select',
        'matricule',
        'nif',
        'nom',
        'prenom',
        'emploi_occupe',
        'dateembauche',
        'actions',
    ];
    @ViewChild(MatPaginator) paginator: MatPaginator;
    selection = new SelectionModel<SalarieComplement>(true, []);

    dataSource = new MatTableDataSource<SalarieComplement>([]);
    data:any; // Active Societe
    dialogRef: any;
    @ViewChild(MatTable) table: MatTable<Salarie>;
    filters: string[] = ['all', 'article', 'listing', 'list', 'info', 'shopping', 'pricing', 'testimonial', 'post', 'interactive'];
    mois =[{id:1,value:'JANVIER'},{id:2,value:'FEVRIER'},{id:3,value:'MARS'},
    {id:4,value:'AVRIL'},{id:5,value:'MAI'},{id:6,value:'JUIN'},
    {id:7,value:'JUILLET'},{id:8,value:'AOUT'},{id:9,value:'SEPTEMBRE'},
    {id:10,value:'OCTOBRE'},{id:11,value:'NOVEMBRE'},{id:12,value:'DECEMBRE'}];
    moisActif:{id,value};
    constructor(
        private _changeDetectorRef: ChangeDetectorRef,
        private _activatedRoute: ActivatedRoute,
        private _router: Router,
        private _matDialog: MatDialog,
        private _fuseConfirmationService: FuseConfirmationService,
        private _salarieService:SalarieService,
        private _societeService:SocieteService,
        private _anneeService:AnneeService
    ) {
        this.dataSource = new MatTableDataSource<SalarieComplement>([]);
        // this._updateList();
        this.moisActif = this.mois[0];
    }


    echo(){
        console.log(this.moisActif);
    }

    ngAfterViewInit() {
        this.dataSource.paginator = this.paginator;
      }
    ngOnInit(): void {
        this._updateList();
        
        this.data = this._societeService.activeSociete;
    }

    _updateList(){
        this.dataSource.data=[];
        this._salarieService.getAllByCurrentSociete().subscribe(data=>{
            // this.dataSource.data=data;
            // this.table.renderRows();
        },err=>{
            this.dataSource.data=[];
            this.table.renderRows();
        })
    }

    add(): void {
        console.log(this.moisActif);
        // return;
        this.dialogRef = this._matDialog.open(AddComponent, {
            data: {
                declarationRetenue: {},
                moisActif:this.moisActif,
                societe:this.data,
                annee:this._anneeService.activeAnnee,
                action: 'new',
            },
        });

        this.dialogRef.afterClosed().subscribe((response: FormGroup) => {
            if (!response) {
                return;
            }
            this._updateList();
            
        });
    }

    toutvider() {
        this.dialogRef = this._fuseConfirmationService.open({
            title: 'Suppression de salarié',
            message:
                'Voulez-vous supprimer tous les salariés de votre base de données ?',
        });
        this.dialogRef.afterClosed().subscribe((response) => {
            if (response === 'confirmed') {
                this.irpp = 0;
                this.tcs = 0;
                this.fnh = 0;
                this.cfp = 0;
                this.dataSource.data = [];
                this.table.renderRows();
            }
        });
    }

    edit(salarie: Salarie): void {
        this.dialogRef = this._matDialog.open(AddComponent, {
            data: {
                declarationRetenue: salarie,
                action: 'edit',
            },
        });

        this.dialogRef.afterClosed().subscribe((response: FormGroup) => {
            if (!response) {
                return;
            }
            this._updateList();
            
        });
    }
    irpp:number = 0;
    tcs:number = 0;
    fnh:number = 0;
    cfp:number = 0;
    importerListeSalaries(): void {
        this.dialogRef = this._matDialog.open(ImportComponent, {
            data: this.data,
        });

        this.dialogRef.afterClosed().subscribe((salaries:SalarieComplement[]) => {
            if (!salaries) {
                return;
            }
            
            this.irpp = 0;
            this.tcs = 0;
            this.fnh = 0;
            this.cfp = 0;
            salaries.forEach(s=>{
                console.log(Number(s.irpp),"=>" , s.irpp)
                this.irpp = this.irpp + Number(s.irpp);
                this.tcs = this.tcs + Number(s.tcs);
                this.fnh = this.fnh + Number(s.fnh);
                this.cfp = this.cfp + Number(s.cfp);

            })
            this.dataSource.data = salaries;
            // this.data.rubriques = response.rubriques;
        });
    }

    supprimer(salarie: Salarie) {
        this.dialogRef = this._fuseConfirmationService.open({
            title: 'Suppression de salarié',
            message:
                'Voulez-vous supprimer ce salarié ' +
                salarie.nom +
                ' ' +
                salarie.prenom +
                ' ?',
        });
        this.dialogRef.afterClosed().subscribe((response) => {
            console.log(response);
            if (response === 'confirmed') {
                this._salarieService.delete(salarie).subscribe(o=>{
                    console.log(o);
                    this._updateList();
                },err=>console.error(err));
            }
        });
    }
     /** Whether the number of selected elements matches the total number of rows. */
  isAllSelected() {
    const numSelected = this.selection.selected.length;
    const numRows = this.dataSource.data.length;
    return numSelected === numRows;
  }

  /** Selects all rows if they are not all selected; otherwise clear selection. */
  masterToggle() {
    if (this.isAllSelected()) {
      this.selection.clear();
      return;
    }

    this.selection.select(...this.dataSource.data);
  }
  supprimer_element(){
      this.dialogRef = this._fuseConfirmationService.open({
        title: 'Suppression de salarié',
        message:
            'Voulez-vous supprimer les salariés sélectionner ?',
    });
    this.dialogRef.afterClosed().subscribe((response) => {
        console.log(response);
        if (response === 'confirmed') {
            
            this.selection.selected.forEach(salarie=>{
                this.dataSource.data.splice(
                    this.dataSource.data.findIndex(
                        (s) => s.matricule == salarie.matricule
                    ),
                    1
                );
                // this.dataSource.data = []
            })
            const tempo=JSON.parse(JSON.stringify(this.dataSource.data));
            this.dataSource.data = [];
            setTimeout(() => {
                this.dataSource.data = tempo;
            this.selection.clear();
            this.table.renderRows();
            }, 0);
        }
    });
  }

  /** The label for the checkbox on the passed row */
  checkboxLabel(row?: SalarieComplement): string {
    if (!row) {
      return `${this.isAllSelected() ? 'deselect' : 'select'} all`;
    }
    return `${this.selection.isSelected(row) ? 'deselect' : 'select'} row ${row.matricule + 1}`;
  }
}
