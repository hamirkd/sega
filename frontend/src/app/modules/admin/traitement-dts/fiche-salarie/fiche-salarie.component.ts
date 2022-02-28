import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { SalarieService } from 'app/core/services/salarie.service';
import { SalarieComplement } from 'app/models/salarie-complement-1.model';
import { Salarie } from 'app/models/salarie.model';
import { Societe } from 'app/models/societe.model';

@Component({
    selector: 'app-fiche-salarie',
    templateUrl: './fiche-salarie.component.html',
    styleUrls: ['./fiche-salarie.component.scss'],
})
export class FicheSalarieComponent implements OnInit {
    @Input() name;
    salarie: SalarieComplement;
    formFieldHelpers: string[] = [''];
    trimestreActif:number;
    annee:any
    societe:Societe = new Societe({});
    constructor(
        private _formBuilder: FormBuilder,
        public matDialogRef: MatDialogRef<FicheSalarieComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,
        private salarieService: SalarieService
    ) {
        console.log(_data);
        this.salarie = new SalarieComplement(_data.salarie);
        this.trimestreActif = _data.trimestreActif;
        this.annee = _data.annee;
        this.societe = new Societe(_data.societe);
        this.salarieForm = this.createsalarieForm();
    }
    salarieForm: any;

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
    createsalarieForm(): FormGroup {
        return this._formBuilder.group({
            societe: [{value: this.societe.raison_sociale, disabled: true}],
            annee:[{value: this.annee, disabled: true}],
            trimestreActif:[{value: this.trimestreActif, disabled: true}],
            n_cnss:[{value: this.salarie.n_cnss, disabled: true}],
            n_cnamgs:[{value: this.salarie.n_cnamgs, disabled: true}],
            matricule: [this.salarie.matricule],
            nom: [this.salarie.nom],
            prenom: [this.salarie.prenom],
            date_embauche:[{value: this.salarie.date_embauche, disabled: true}],
            date_depart:[{value: this.salarie.date_depart, disabled: true}],
            tx_cnss:[this.salarie.tx_cnss],
            tx_cnamgs:[this.salarie.tx_cnamgs],
           
            bpcnss1:[this.salarie.bpcnss1],
            bpcnam1:[this.salarie.bpcnam1],
            bdplaf1:[this.salarie.bdplaf1],
            njrcnss1:[this.salarie.njrcnss1],
            njrcnam1:[this.salarie.njrcnam1],
                      
            bpcnss2:[this.salarie.bpcnss2],
            bpcnam2:[this.salarie.bpcnam2],
            bdplaf2:[this.salarie.bdplaf2],
            njrcnss2:[this.salarie.njrcnss2],
            njrcnam2:[this.salarie.njrcnam2],
                      
            bpcnss3:[this.salarie.bpcnss3],
            bpcnam3:[this.salarie.bpcnam3],
            bdplaf3:[this.salarie.bdplaf3],
            njrcnss3:[this.salarie.njrcnss3],
            njrcnam3:[this.salarie.njrcnam3],
            
            code_etablissement:[this.salarie.code_etablissement],
            fin13das: [this.salarie.fin13das],
        });
    }
    ngOnInit(): void {}

    onSubmit() {
        this.salarie.copy(this.salarieForm.getRawValue());
        this.salarieService.update(this.salarie).subscribe(
            (o) => {
                console.log(o);
                this.matDialogRef.close(this.salarieForm);
            },
            (err) => console.error(err)
        );
    }

    close() {}
}
