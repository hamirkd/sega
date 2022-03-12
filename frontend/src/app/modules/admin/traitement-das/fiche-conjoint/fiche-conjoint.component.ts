import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { TraitementDasService } from 'app/core/services/traitement-das.service';
import { SalarieComplement } from 'app/models/salarie-complement-1.model';
import { Salarie } from 'app/models/salarie.model';
import { Societe } from 'app/models/societe.model';
import { TraitementDts } from 'app/models/traitement-dts.model';

@Component({
    selector: 'app-fiche-conjoint',
    templateUrl: './fiche-conjoint.component.html',
    styleUrls: ['./fiche-conjoint.component.scss'],
})
export class FicheConjointComponent implements OnInit {
    @Input() name; 
    salarie:SalarieComplement =new SalarieComplement({});
    societe:Societe=new Societe({});
    annee;
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<FicheConjointComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,private traitementDasService:TraitementDasService) {
          this.salarie = _data.salarie;
        
        this.dasSalarieForm = this.createdasSalarieForm();
        this.traitementDasService.getSalariesById(this.salarie.id).subscribe(data=>{
            this.salarie = new SalarieComplement(data);

            this.dasSalarieForm.setValue({
                matricule:data.matricule,
                nif_conjoint:data.nif_conjoint,
                nom_conjoint:data.nom_conjoint,
                prenom_conjoint:data.prenom_conjoint,
                nom_jeune_fille_conjoint:data.nom_jeune_fille_conjoint,
                profession_conjoint:data.profession_conjoint,
                employeur_conjoint:data.employeur_conjoint,
                telephone_conjoint:data.telephone_conjoint,
                code_postal_conjoint:data.code_postal_conjoint,
                ville_conjoint:data.ville_conjoint,
             })
        },err=>{
            console.log(err)
            this.dasSalarieForm = this.createdasSalarieForm();
        });
    }
    dasSalarieForm :FormGroup

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createdasSalarieForm(): FormGroup {
         return this._formBuilder.group({
            matricule:[{value: this.salarie.matricule, disabled: true}],
            nif_conjoint:[this.salarie.nif_conjoint],
            nom_conjoint:[this.salarie.nom_conjoint],
            prenom_conjoint:[this.salarie.prenom_conjoint],
            nom_jeune_fille_conjoint:[this.salarie.nom_jeune_fille_conjoint],
            profession_conjoint:[this.salarie.profession_conjoint],
            employeur_conjoint:[this.salarie.employeur_conjoint],
            telephone_conjoint:[this.salarie.telephone_conjoint],
            code_postal_conjoint:[this.salarie.code_postal_conjoint],
            ville_conjoint:[this.salarie.ville_conjoint],
         })
        
    }
    ngOnInit(): void {}

    onSubmit() {
        this.salarie.copy(this.dasSalarieForm.getRawValue());
      
            this.traitementDasService.updateSalarie(this.salarie).subscribe(o=>{
                console.log(o);
                this.matDialogRef.close(this.dasSalarieForm);
            },err=>console.error(err));
        

        
    }

    close() {}
}
