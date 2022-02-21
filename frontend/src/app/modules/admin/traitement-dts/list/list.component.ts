import {
    AfterViewInit,
    ChangeDetectorRef,
    Component,
    OnInit,
    ViewChild,
} from '@angular/core';
import { AddComponent } from '../add/add.component';
import { AddComponent as AddSalarieComponent } from '../../salaries/add/add.component';
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
import { TraitementDtsService } from 'app/core/services/traitement-dts.service';
import { Societe } from 'app/models/societe.model';
import { saveAs } from 'file-saver';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from 'environments/environment';
import { TraitementDts } from 'app/models/traitement-dts.model';

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
export class ListComponent implements OnInit, AfterViewInit {
    displayedColumns: string[] = [
        'select',
        'matricule',
        'nif',
        'nom',
        'prenom',
        'emploi_occupe',
        'actions',
    ];
    @ViewChild(MatPaginator) paginator: MatPaginator;
    selection = new SelectionModel<SalarieComplement>(true, []);

    dataSource = new MatTableDataSource<SalarieComplement>([]);
    data: Societe = new Societe({}); // Active Societe
    dialogRef: any;
    @ViewChild(MatTable) table: MatTable<Salarie>;
  
    mois = [
        { id: 1, value: 'JANVIER' },
        { id: 2, value: 'FEVRIER' },
        { id: 3, value: 'MARS' },
        { id: 4, value: 'AVRIL' },
        { id: 5, value: 'MAI' },
        { id: 6, value: 'JUIN' },
        { id: 7, value: 'JUILLET' },
        { id: 8, value: 'AOUT' },
        { id: 9, value: 'SEPTEMBRE' },
        { id: 10, value: 'OCTOBRE' },
        { id: 11, value: 'NOVEMBRE' },
        { id: 12, value: 'DECEMBRE' },
    ];
    trimestres = [ 1,2,3,4]; 
    trimestreActif:number;
    traitementDas:TraitementDts = new TraitementDts({});
    constructor(private http: HttpClient,
        private _changeDetectorRef: ChangeDetectorRef,
        private _activatedRoute: ActivatedRoute,
        private _router: Router,
        private _matDialog: MatDialog,
        private _fuseConfirmationService: FuseConfirmationService,
        private _salarieService: SalarieService,
        private _societeService: SocieteService,
        private _anneeService: AnneeService,
        private _declaration_retenue: TraitementDtsService
    ) {
        this.dataSource = new MatTableDataSource<SalarieComplement>([]);
        // this._updateList();
         this.trimestreActif = this.trimestres[0];
    }

    initData(){
        this._declaration_retenue.getByTrimestreAnnee({annee: this._anneeService.activeAnnee,trimestre:this.trimestreActif,societe_id:this._societeService.activeSociete.id})
        .subscribe(data=>{
            this.traitementDas = new TraitementDts(data); 
        },err=>{
            this.traitementDas = new TraitementDts({});
            this.traitementDas.alloc_familiale = 0;
            this.traitementDas.autre_deduc = 0;
            this.traitementDas.avance = 0;
            this.traitementDas.precision = 0;
        });
        
    }

    echo() { 
    }

    ngAfterViewInit() {
        this.dataSource.paginator = this.paginator;
    }
    ngOnInit(): void {
        this.data = this._societeService.activeSociete;
        this._updateList();
        this.initData();

    }

    _updateList() {
        this.dataSource.data = [];
        this._declaration_retenue.getSalariesByTrimestreAnneeSociete({annee:this._anneeService.activeAnnee,trimestre:this.trimestreActif,societe_id:this._societeService.activeSociete.id}).subscribe(
            (data) => {
                 this.dataSource.data=data;
                 this.table.renderRows();
                 console.log(data);
            },
            (err) => {
                this.dataSource.data = [];
                this.table.renderRows();
            }
        );
    }

    add(): void {
        
        this.dialogRef = this._matDialog.open(AddComponent, {
            data: {
                declarationRetenue: {},
                trimestre: this.trimestreActif,
                societe: this.data,
                annee: this._anneeService.activeAnnee,
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
                this.traitementDas.alloc_familiale = 0;
                this.traitementDas.autre_deduc = 0;
                this.traitementDas.avance = 0;
                this.traitementDas.numero_dts = 0;
                this.dataSource.data = [];
                this.table.renderRows();
            }
        });
    }

    edit(salarie: Salarie): void {
        this.dialogRef = this._matDialog.open(AddSalarieComponent, {
            data: {
                salarie: salarie,
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
    irpp: number = 0;
    tcs: number = 0;
    fnh: number = 0;
    cfp: number = 0;
    importerListeSalaries(): void {
        this.dialogRef = this._matDialog.open(ImportComponent, {
            data: this.data,
        });

        this.dialogRef
            .afterClosed()
            .subscribe((salaries: SalarieComplement[]) => {
                if (!salaries) {
                    return;
                }
                
                
                this.traitementDas.alloc_familiale = 0;
                this.traitementDas.autre_deduc = 0;
                this.traitementDas.avance = 0;
                this.traitementDas.numero_dts = 0;
                salaries.forEach((s) => {
                    this.traitementDas.alloc_familiale = this.traitementDas.alloc_familiale + Number(s.alloc_familiale);
                    this.traitementDas.autre_deduc = this.traitementDas.autre_deduc + Number(s.autre_deduc);
                    this.traitementDas.avance = this.traitementDas.avance + Number(s.avance);
                    this.traitementDas.numero_dts = this.traitementDas.numero_dts + Number(s.numero_dts);
                });
                this._declaration_retenue.saveManySalariesInTraitementDts({salaries:salaries,annee:this._anneeService.activeAnnee,trimestre:this.trimestreActif,societe_id:this._societeService.activeSociete.id})
                .subscribe(d=>{
                    console.log(d);
                    this._updateList();
                })
                // this.dataSource.data = salaries;
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
                this._salarieService.delete(salarie).subscribe(
                    (o) => {
                        console.log(o);
                        this._updateList();
                    },
                    (err) => console.error(err)
                );
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
    supprimer_element() {
        this.dialogRef = this._fuseConfirmationService.open({
            title: 'Suppression de salarié',
            message: 'Voulez-vous supprimer les salariés sélectionner ?',
        });
        this.dialogRef.afterClosed().subscribe((response) => {
            console.log(response);
            if (response === 'confirmed') {
                this.selection.selected.forEach((salarie) => {
                    this.dataSource.data.splice(
                        this.dataSource.data.findIndex(
                            (s) => s.matricule == salarie.matricule
                        ),
                        1
                    );
                    // this.dataSource.data = []
                });
                const tempo = JSON.parse(JSON.stringify(this.dataSource.data));
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
        return `${this.selection.isSelected(row) ? 'deselect' : 'select'} row ${
            row.matricule + 1
        }`;
    }

    edit10() {
        this._declaration_retenue.edit10xls({
            annee: this._anneeService.activeAnnee,
            trimestre: this.trimestreActif,societe_id:this._societeService.activeSociete.id
        }).subscribe((d)=>{
            console.log(d);
            saveAs(d,`ETAT_ID10_${this.data.raison_sociale.toUpperCase()}_${this._anneeService.activeAnnee}_${this.trimestreActif}.xlsx`);

        },err=>{
            // Lorsque c'est un fichier, une erreur est générée, parce 
            //que angular s'attends à recevoir des données sous json
            console.log(err);
        })
    }

    edit11() {
        this._declaration_retenue.edit11({
            annee: this._anneeService.activeAnnee,
            trimestre: this.trimestreActif,societe_id:this._societeService.activeSociete.id
        }).subscribe((d)=>{
            console.log(d);
            saveAs(d,`ETAT_ID11_${this.data.raison_sociale.toUpperCase()}_${this._anneeService.activeAnnee}_${this.trimestreActif}.docx`);

        },err=>{
            // Lorsque c'est un fichier, une erreur est générée, parce 
            //que angular s'attends à recevoir des données sous json
            console.log(err);
        })
    }

}
