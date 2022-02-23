import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { TraitementDtsService } from 'app/core/services/traitement-dts.service';
import { Societe } from 'app/models/societe.model';
import { TraitementDts } from 'app/models/traitement-dts.model';

@Component({
    selector: 'app-fiche-tavance',
    templateUrl: './fiche-tavance.component.html',
    styleUrls: ['./fiche-tavance.component.scss'],
})
export class FicheTavanceComponent implements OnInit {
    @Input() name;
    traitementDts:TraitementDts=new TraitementDts({});
    action:'new'|'edit'='new';
    trimestreActif;
    societe:Societe=new Societe({});
    annee;
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<FicheTavanceComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,private traitementDtsService:TraitementDtsService) {
        // this.traitementDts = new TraitementDts(_data.traitementDts);
        this.action = _data.action
        this.trimestreActif = _data.trimestreActif;
        this.societe = _data.societe;
        this.annee = _data.annee;
        
        this.traitementDtsForm = this.createTraitementDtsForm();
        this.traitementDtsService.getByTrimestreAnnee({societe_id:this.societe.id,annee:this.annee,trimestre:this.trimestreActif}).subscribe(data=>{

            this.traitementDts = new TraitementDts(data);
            
            this.traitementDtsForm.setValue({
                annee:this.annee,
                trimestre:this.trimestreActif,
                avance:data.avance,
                numero_dts:data.numero_dts,
                reste:data.reste
             })
        },err=>{
            this.traitementDtsForm = this.createTraitementDtsForm();
        });
    }
    traitementDtsForm :FormGroup

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createTraitementDtsForm(): FormGroup {
         return this._formBuilder.group({
            annee:[{value: this.annee, disabled: true}],
            trimestre:[{value: this.trimestreActif, disabled: true}],
            avance:[this.traitementDts.avance],
            reste:[this.traitementDts.reste],
            numero_dts:[this.traitementDts.numero_dts]
         })
        
    }
    ngOnInit(): void {}

    onSubmit() {
        this.traitementDts.copy(this.traitementDtsForm.getRawValue());
        this.traitementDts.trimestre = this.trimestreActif;
        if(this.action=='new')
        {
            this.traitementDtsService.add(this.traitementDts).subscribe(o=>{
                console.log(o);
                this.matDialogRef.close(this.traitementDtsForm);
            },err=>console.error(err));
        }
        else{
            this.traitementDtsService.update(this.traitementDts).subscribe(o=>{
                console.log(o);
                this.matDialogRef.close(this.traitementDtsForm);
            },err=>console.error(err));
        }

        
    }

    close() {}
}
