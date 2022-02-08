import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { RubriqueService } from 'app/core/services/rubrique.service';
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
        @Inject(MAT_DIALOG_DATA) private _data: any,private _rubriqueService:RubriqueService) {
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


        this.rubrique.copy(this.rubriqueForm.getRawValue());
        if(this.action=='new')
        {
            this._rubriqueService.add(this.rubrique).subscribe(data=>{
                console.log(data);
                this.matDialogRef.close(this.rubriqueForm);
            })
        }
        else
        {
            this._rubriqueService.update(this.rubrique).subscribe(data=>{
                console.log(data);
                this.matDialogRef.close(this.rubriqueForm);
            })
        }
        
    }

    close() {}
}
