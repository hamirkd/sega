import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Rubrique } from 'app/models/rubrique.model';

@Component({
    selector: 'app-rubrique-add',
    templateUrl: './add.component.html',
    styleUrls: ['./add.component.scss'],
})
export class AddComponent implements OnInit {
    @Input() name;
    rubrique:Rubrique;
    action:'new'|'edit'='new'
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<AddComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,) {
            console.log(_data)
        this.rubrique = new Rubrique(_data.rubrique);
        this.action = _data.action
        this.rubriqueForm = this.createrubriqueForm();
    }
    rubriqueForm :any

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createrubriqueForm(): FormGroup {
        return this._formBuilder.group({
         code:[this.rubrique.code],
         intitule:[this.rubrique.intitule],
         gain:[this.rubrique.gain],
         sens:[this.rubrique.sens],
         type:[this.rubrique.type],
         imprimable:[this.rubrique.imprimable]
        });
    }
    ngOnInit(): void {}

    onSubmit() {
        this.matDialogRef.close(this.rubriqueForm);
    }

    close() {}
}
