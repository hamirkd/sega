import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { TraitementDtsService } from 'app/core/services/traitement-dts.service';
import { Societe } from 'app/models/societe.model';
import { TraitementDts } from 'app/models/traitement-dts.model';

@Component({
    selector: 'app-definir1',
    templateUrl: './definir1.component.html',
    styleUrls: ['./definir1.component.scss'],
})
export class Definir1Component implements OnInit {
    @Input() name;
    traitementDts:TraitementDts=new TraitementDts({});
    action:'new'|'edit'='new';
    trimestreActif;
    societe:Societe=new Societe({});
    annee;
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<Definir1Component>,
        @Inject(MAT_DIALOG_DATA) private _data: any,private traitementDtsService:TraitementDtsService) {
        // this.traitementDts = new TraitementDts(_data.traitementDts);
        this.action = _data.action
        this.trimestreActif = _data.trimestreActif;
        this.societe = _data.societe;
        this.annee = _data.annee;
        console.log(_data)
        this.traitementDtsForm = this.createTraitementDtsForm();
        this.traitementDtsService.getByTrimestreAnnee({societe_id:this.societe.id,annee:this.annee,trimestre:this.trimestreActif}).subscribe(data=>{

            this.traitementDts = new TraitementDts(data);
            
            this.traitementDtsForm.setValue({
                annee:this.annee,
                trimestre:this.trimestreActif,
                alloc_familiale:data.alloc_familiale,
                autre_deduc:data.autre_deduc,
                ristourne:data.ristourne, 
                precision:data.precision,
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
            alloc_familiale:[this.traitementDts.alloc_familiale],
            autre_deduc:[this.traitementDts.autre_deduc],
            ristourne:[{value: this.traitementDts.ristourne, disabled: true}],
            precision:[this.traitementDts.precision],
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
