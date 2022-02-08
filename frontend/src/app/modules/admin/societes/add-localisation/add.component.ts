import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { SocieteService } from 'app/core/services/societe.service';
import { Societe } from 'app/models/societe.model';

@Component({
    selector: 'app-localisation-add',
    templateUrl: './add.component.html',
    styleUrls: ['./add.component.scss'],
})
export class AddComponent implements OnInit {
    @Input() name;
    societe: Societe;
    action:'edit'|'new'='new';
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,@Inject(MAT_DIALOG_DATA) private _data: any,public matDialogRef: MatDialogRef<AddComponent>,
    public societeService:SocieteService) {
      
    this.societe = new Societe(_data.societe);
    this.action = _data.action;
    this.societeForm = this.createsocieteForm();
    }
    societeForm :any
    

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createsocieteForm(): FormGroup {
        return this._formBuilder.group({
         province:[this.societe.province],
         departement:[this.societe.departement],
         arrondissement:[this.societe.arrondissement],
         quartier:[this.societe.quartier],
         lieu_dit:[this.societe.lieu_dit],
         rue:[this.societe.rue],
         adressen:[this.societe.adressen],
         code_residence:[this.societe.code_residence]
        });
    }
    ngOnInit(): void {}

    
    onSubmit() {
        
      const s=new Societe(this.societe);
      s.copy(this.societeForm.getRawValue());
      
      if(this.action=='edit')
        this.societeService.update(s).subscribe(data=>{
            console.log(data);
            this.matDialogRef.close();
          },
          err=>alert(err.message))
        else
        this.societeService.add(s).subscribe(data=>{
            console.log(data);
            this.matDialogRef.close(this.societeForm);
        },
        err=>alert(err.message))
    }

    close() {}
}
