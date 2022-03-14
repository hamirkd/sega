import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { SocieteService } from 'app/core/services/societe.service';
import { Societe } from 'app/models/societe.model';
import moment from 'moment';

import {
    MAT_MOMENT_DATE_FORMATS,
    MomentDateAdapter,
    MAT_MOMENT_DATE_ADAPTER_OPTIONS,
  } from '@angular/material-moment-adapter';
  import {DateAdapter, MAT_DATE_FORMATS, MAT_DATE_LOCALE} from '@angular/material/core';
  import 'moment/locale/ja';
  import 'moment/locale/fr';

@Component({
    selector: 'app-participant-add',
    templateUrl: './add.component.html',
    styleUrls: ['./add.component.scss'],
    providers: [
        {provide: MAT_DATE_LOCALE, useValue: 'fr'},
        {
          provide: DateAdapter,
          useClass: MomentDateAdapter,
          deps: [MAT_DATE_LOCALE, MAT_MOMENT_DATE_ADAPTER_OPTIONS],
        },
        {provide: MAT_DATE_FORMATS, useValue: MAT_MOMENT_DATE_FORMATS},
      ],
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
         code:[this.societe.code],
         regime:[this.societe.regime],
         raison_sociale:[this.societe.raison_sociale],
         sigle:[this.societe.sigle],
         rccm:[this.societe.rccm],
         cnss:[this.societe.cnss],
         contribuable:[this.societe.contribuable],
         statistique:[this.societe.statistique],
         activite:[this.societe.activite],
         date_creation:[moment(this.societe.date_creation)],
         date_mise_service:[moment(this.societe.date_mise_service)],
         date_effet:[moment(this.societe.date_effet)],
         date_immatriculation:[moment(this.societe.date_immatriculation)],
         adresse:[this.societe.adresse],
         code_postal:[this.societe.code_postal],
         ville:[this.societe.ville],
         telephone:[this.societe.telephone],
         fax:[this.societe.fax],
         email:[this.societe.email],
         nif:[this.societe.nif],
         signataire:[this.societe.signataire]
        });
    }
    ngOnInit(): void {}

    
    onSubmit() {
        
      const s=new Societe(this.societe);
      s.copy(this.societeForm.getRawValue());
      s.date_creation = moment(s.date_creation).format("YYYY/MM/DD");
      s.date_mise_service = moment(s.date_mise_service).format("YYYY/MM/DD");
      s.date_effet = moment(s.date_effet).format("YYYY/MM/DD");
      s.date_immatriculation = moment(s.date_immatriculation).format("YYYY/MM/DD");
        if(this.action=='edit')
            {
                console.log(s);
                this.societeService.update(s).subscribe(data=>{
                    console.log(data);
                    this.matDialogRef.close();
                    },
                    err=>alert(err.message))   
            }
        else
            this.societeService.add(s).subscribe(data=>{
                this.matDialogRef.close("data");
            },
            err=>alert(err.message))
    }

    close() {}
}
