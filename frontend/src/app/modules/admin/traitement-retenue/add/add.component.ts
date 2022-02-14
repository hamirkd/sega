import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { DeclarationRetenueService } from 'app/core/services/declaration-retenue.service';
import { DeclarationRetenue } from 'app/models/declaration-retenue.model';

@Component({
    selector: 'app-retenu-add',
    templateUrl: './add.component.html',
    styleUrls: ['./add.component.scss'],
})
export class AddComponent implements OnInit {
    @Input() name;
    declarationRetenue:DeclarationRetenue;
    action:'new'|'edit'='new';
    moisActif;
    societe;
    annee;
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<AddComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,private declarationRetenueService:DeclarationRetenueService) {
        this.declarationRetenue = new DeclarationRetenue(_data.declarationRetenue);
        this.action = _data.action
        this.moisActif = _data.moisActif;
        this.societe = _data.societe;
        this.annee = _data.annee;
        console.log(_data)
        this.declarationRetenueForm = this.createDeclarationRetenueForm();
    }
    declarationRetenueForm :any

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createDeclarationRetenueForm(): FormGroup {
         return this._formBuilder.group({
            annee:[{value: this.annee, disabled: true}],
            mois:[{value: this.moisActif.value, disabled: true}],
            societe:[{value: this.societe.raison_sociale, disabled: true}],
            mode_reglement:[this.declarationRetenue.mode_reglement],
            numero_cheque:[this.declarationRetenue.numero_cheque],
            iban:[this.declarationRetenue.iban], 
            bic:[this.declarationRetenue.bic],
            date_versement:[this.declarationRetenue.date_versement],
            date_signature:[this.declarationRetenue.date_signature],
            lieu_signature:[this.declarationRetenue.lieu_signature],
            irpp:[this.declarationRetenue.irpp],
            tcs:[this.declarationRetenue.tcs],
            fnh:[this.declarationRetenue.fnh],
         })
        
    }
    ngOnInit(): void {}

    onSubmit() {
        this.declarationRetenue.copy(this.declarationRetenueForm.getRawValue());
        console.log(this.declarationRetenue);
        if(this.action=='new')
        {
            this.declarationRetenueService.add(this.declarationRetenue).subscribe(o=>{
                console.log(o);
                this.matDialogRef.close(this.declarationRetenueForm);
            },err=>console.error(err));
        }
        else{
            this.declarationRetenueService.update(this.declarationRetenue).subscribe(o=>{
                console.log(o);
                this.matDialogRef.close(this.declarationRetenueForm);
            },err=>console.error(err));
        }

        
    }

    close() {}
}
