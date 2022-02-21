import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { DeclarationRetenueService } from 'app/core/services/declaration-retenue.service';
import { DeclarationRetenue } from 'app/models/declaration-retenue.model';
import moment from 'moment';

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
        this.declarationRetenueService.getByMoisAnnee({societe_id:this.societe.id,annee:this.annee,mois:this.moisActif.id}).subscribe(data=>{

            this.declarationRetenue = new DeclarationRetenue(data);

            console.log(moment(data.date_versement).format("DD/MM/YYYY"))
            this.declarationRetenueForm.value['mode_reglement']=data.mode_reglement;
            this.declarationRetenueForm.setValue({
                annee:this.annee,
                mois:this.moisActif.value,
                societe:this.societe.raison_sociale,
                mode_reglement:data.mode_reglement,
                numero_cheque:data.numero_cheque,
                iban:data.iban, 
                bic:data.bic,
                date_versement:data.date_versement,
                date_signature:data.date_signature,
                lieu_signature:data.lieu_signature,
                irpp:data.irpp,
                tcs:data.tcs,
                fnh:data.fnh,
             })
        },err=>{
            this.declarationRetenueForm = this.createDeclarationRetenueForm();
        });
    }
    declarationRetenueForm :FormGroup

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
        this.declarationRetenue.date_signature = moment(this.declarationRetenue.date_signature).format('YYYY/MM/DD');
        this.declarationRetenue.date_versement = moment(this.declarationRetenue.date_versement).format('YYYY/MM/DD');
        // return;
        this.declarationRetenue.mois = this.moisActif.id;
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
