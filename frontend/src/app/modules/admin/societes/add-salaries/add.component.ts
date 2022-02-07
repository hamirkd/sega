import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Salarie } from 'app/models/salarie.model';

@Component({
    selector: 'app-participant-add',
    templateUrl: './add.component.html',
    styleUrls: ['./add.component.scss'],
})
export class AddComponent implements OnInit {
    @Input() name;
    salarie:Salarie;
    action:'new'|'edit'='new'
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<AddComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,) {
            console.log(_data)
        this.salarie = new Salarie(_data.salarie);
        this.action = _data.action
        this.salarieForm = this.createsalarieForm();
    }
    salarieForm :any

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createsalarieForm(): FormGroup {
        return this._formBuilder.group({
         matricule:[this.salarie.matricule],
         nom:[this.salarie.nom],
         prenom:[this.salarie.prenom],
         nif:[this.salarie.nif],
         emploi:[this.salarie.emploi],
         niveau:[this.salarie.niveau],
         nationalite:[this.salarie.nationalite],
         age:[this.salarie.age],
         sexe:[this.salarie.sexe],
         enfants:[this.salarie.enfants],
         emploi_occupe:[this.salarie.emploi_occupe],
         situation_familiale:[this.salarie.situation_familiale],
         deb10:[this.salarie.deb10],
         deb11:[this.salarie.deb11],
         code_postal:[this.salarie.code_postal],
         ville:[this.salarie.ville],
         telephone:[this.salarie.telephone],
         fin12:[this.salarie.fin12],
         fin13das:[this.salarie.fin13das],
        });
    }
    ngOnInit(): void {}

    onSubmit() {
        this.matDialogRef.close(this.salarieForm);}

    close() {}
}
