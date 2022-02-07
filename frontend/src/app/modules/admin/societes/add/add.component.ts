import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Societe } from 'app/models/societe.model';

@Component({
    selector: 'app-participant-add',
    templateUrl: './add.component.html',
    styleUrls: ['./add.component.scss'],
})
export class AddComponent implements OnInit {
    @Input() name;
    // code;regime;raison_sociale;sigle;rccm;cnss;contribuable;statistique;activite;date_creation;date_mise_service;date_effet;date_immatriculation;adresse;code_postal;ville;telephone;fax;email;nif;  constructor(public modal: NgbActiveModal,public toastr: ToastrManager) {
    societe: Societe;
    action:'edit'|'new'='new';
    
    formFieldHelpers: string[] = [''];
    constructor(private _formBuilder: FormBuilder,@Inject(MAT_DIALOG_DATA) private _data: any,public matDialogRef: MatDialogRef<AddComponent>) {
      
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
         code:[this.societe.code],
         regime:[this.societe.regime],
         raison_sociale:[this.societe.raison_sociale],
         sigle:[this.societe.sigle],
         rccm:[this.societe.rccm],
         cnss:[this.societe.cnss],
         contribuable:[this.societe.contribuable],
         statistique:[this.societe.statistique],
         activite:[this.societe.activite],
         date_creation:[this.societe.date_creation],
         date_mise_service:[this.societe.date_mise_service],
         date_effet:[this.societe.date_effet],
         date_immatriculation:[this.societe.date_immatriculation],
         adresse:[this.societe.adresse],
         code_postal:[this.societe.code_postal],
         ville:[this.societe.ville],
         telephone:[this.societe.telephone],
         fax:[this.societe.fax],
         email:[this.societe.email],
         nif:[this.societe.nif],
        });
    }
    ngOnInit(): void {}

    onSubmit() {}

    close() {}
}
