import { Component, Inject, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { AnneeService } from 'app/core/services/annee.service';
import { DasQuittancesService } from 'app/core/services/das-quittances.service';
import { SocieteService } from 'app/core/services/societe.service';
import { DasQuittance } from 'app/models/das-quittance.model';
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
    selector: 'app-retenu-add-quittances',
    templateUrl: './add-quittances.component.html',
    styleUrls: ['./add-quittances.component.scss'],
    providers: [
        // The locale would typically be provided on the root module of your application. We do it at
        // the component level here, due to limitations of our example generation script.
        {provide: MAT_DATE_LOCALE, useValue: 'fr'},
    
        // `MomentDateAdapter` and `MAT_MOMENT_DATE_FORMATS` can be automatically provided by importing
        // `MatMomentDateModule` in your applications root module. We provide it at the component level
        // here, due to limitations of our example generation script.
        {
          provide: DateAdapter,
          useClass: MomentDateAdapter,
          deps: [MAT_DATE_LOCALE, MAT_MOMENT_DATE_ADAPTER_OPTIONS],
        },
        {provide: MAT_DATE_FORMATS, useValue: MAT_MOMENT_DATE_FORMATS},
      ],
})
export class AddQuittanceComponent implements OnInit {
    @Input() name;
    dasQuittance:DasQuittance;
    action:'new'|'edit'='new';
    moisActif;
    societe;
    annee;
    montant
    
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
    constructor(private _formBuilder: FormBuilder,public matDialogRef: MatDialogRef<AddQuittanceComponent>,
        @Inject(MAT_DIALOG_DATA) private _data: any,private _dasQuittanceService:DasQuittancesService,private _societeService:SocieteService,
        private _anneeService:AnneeService) {
        this.moisActif = this.mois[0];
        this.dasQuittance = new DasQuittance(_data.dasQuittance);
        this.action = _data.action;
        this.societe = this._societeService.activeSociete;
        this.annee = this._anneeService.activeAnnee;
        this.dasQuittanceForm = this.createDasQuittanceForm();
        this.dasQuittance.societe_id = this.societe.id;
        this.dasQuittance.annee = this.annee;
        
        // this._dasQuittanceService.getByMoisAnnee(this.dasQuittance).subscribe(data=>{
        //     this.dasQuittanceForm = this.createDasQuittanceForm();
        //     this.dasQuittanceForm.setValue({
        //         annee:data.annee,
        //         mois:data.mois,
        //         societe:this.societe.raison_sociale,
        //         montant:data.montant,
        //         societe_id:data.societe_id,
        //         n_quittance:data.n_quittance,
        //         nature:data.nature, 
        //         date_quittance:data.date_quittance
        //      })
        // },err=>{
        //     this.dasQuittanceForm = this.createDasQuittanceForm();
        // });
    }
    dasQuittanceForm :FormGroup

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */
     createDasQuittanceForm(): FormGroup {
        // this.montant = new FormControl(this.dasQuittance.montant, [
        //     Validators.required,
        //     Validators.pattern("^[0-9]*$")
        //   ]);
         return this._formBuilder.group({
            annee:[{value: this.dasQuittance.annee, disabled: true}],
            mois:[{value: this.dasQuittance.mois, disabled: false}],
            societe:[{value: this.societe.raison_sociale, disabled: true}],
            montant:new FormControl(this.dasQuittance.montant, [
                Validators.required,
                Validators.pattern("^[0-9]*$")
              ]),
            n_quittance:[this.dasQuittance.n_quittance],
            societe_id:[this.societe.id],
            nature:[this.dasQuittance.nature],  
            date_quittance:[moment(this.dasQuittance.date_quittance)]
         })
        
    }
    ngOnInit(): void {
        this.dasQuittance.copy(this.dasQuittanceForm.getRawValue());
        this._dasQuittanceService.getByMoisAnnee(this.dasQuittance).subscribe(data=>{
            this.dasQuittance.copy(data);
            this.dasQuittanceForm.setValue({
                annee:data.annee,
                mois:data.mois,
                societe:this.societe.raison_sociale,
                montant:data.montant,
                n_quittance:data.n_quittance,
                societe_id:data.societe_id,
                nature:data.nature, 
                date_quittance:moment(data.date_quittance)
             })
        },err=>{
            const m=this.dasQuittance.mois;
            this.dasQuittance.copy({});
            this.dasQuittance.annee = this.annee;
            this.dasQuittance.mois = m;
            this.dasQuittance.societe_id = this.societe.id;
            // this.dasQuittanceForm.reset();
            // this.dasQuittanceForm.setValue({
            //     annee:this.dasQuittance.annee,
            //     mois:this.dasQuittance.mois,
            //     societe:this.societe.raison_sociale,
            //     montant:'',
            //     n_quittance:'',
            //     societe_id:this.dasQuittance.societe_id,
            //     nature:'', 
            //     date_quittance:''
            //  })
            this.dasQuittanceForm = this.createDasQuittanceForm();
        });
    }

    onSubmit() {
        this.dasQuittance.copy(this.dasQuittanceForm.getRawValue());
        this.dasQuittance.societe_id = this._societeService.activeSociete.id;
        this.dasQuittance.date_quittance = moment(this.dasQuittance.date_quittance).format('YYYY/MM/DD');
         
        this._dasQuittanceService.add(this.dasQuittance).subscribe(o=>{
            console.log(o);
            this.matDialogRef.close(this.dasQuittanceForm);
        },err=>console.error(err));
    
    }

    close() {}
}
