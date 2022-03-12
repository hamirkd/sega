import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { MatDialogRef } from '@angular/material/dialog';
import { f_convert_to_number as nb } from 'app/core/services/function';
import { SalarieComplement } from 'app/models/salarie-complement-1.model';
import { Salarie } from 'app/models/salarie.model';
import * as XLSX from 'xlsx';

@Component({
    selector: 'app-import',
    templateUrl: './import.component.html',
    styleUrls: ['./import.component.scss'],
})
export class ImportComponent implements OnInit {
    action = 'noshow';
    salaries:Salarie[]=[];
    arrayBuffer: any;
    file: File;
    formFieldHelpers: string[] = [''];

    constructor(
        public matDialogRef: MatDialogRef<ImportComponent>
    ) {
        this.salaries = [];
    }

    /**
     * Create user form
     *
     * @returns {FormGroup}
     */

    ngOnInit(): void {}

    onSubmit() {}

    close() {
        this.matDialogRef.close(this.salaries);
    }

    incomingfile(event) {
        this.file = event.target.files[0];
    }

    Upload() {
        let fileReader = new FileReader();
        fileReader.onload = (e) => {
            this.arrayBuffer = fileReader.result;
            var data = new Uint8Array(this.arrayBuffer);
            var arr = new Array();
            for (var i = 0; i != data.length; ++i)
                arr[i] = String.fromCharCode(data[i]);
            var bstr = arr.join('');
            
            var workbook = XLSX.read(bstr, { type: 'binary' });
            var first_sheet_name = workbook.SheetNames[0];
            var worksheet = workbook.Sheets[first_sheet_name];
            // console.log(XLSX.utils.sheet_to_json(worksheet, { raw: true }));return
            let dataAll = XLSX.utils.sheet_to_json(worksheet, {
                raw: true,
            });
            // Nous allons relie les colonnes de la table excel 
            dataAll.forEach(d=>{
                let salarie = new SalarieComplement({});
                salarie.matricule = d["Matricule"];
                salarie.nif = d["NIF"];
                salarie.nom = d["Nom"];
                salarie.prenom = d["Prénom"];
                salarie.emploi = d["Emploi"];
                salarie.niveau = d["Niveau"];
                salarie.nationalite = d["Nationalité"];
                salarie.age = d["Age"];
                salarie.sexe = d["Sexe"];
                salarie.enfants = d["Enfants"];
                salarie.telephone = d["Téléphone"];
                salarie.code_postal = d["Code postal"];
                salarie.ville = d["Ville"];
                salarie.emploi_occupe = d["Emploi occupé"];
                salarie.situation_familiale = d["Situation familiale"];
                salarie.deb10 = d["DEB10"];
                salarie.deb11 = d["DEB11"];
                salarie.fin12 = d["FIN12"];
                salarie.fin13das = d["FIN13DAS"];
                salarie.brute = nb(d["BRUT"]);
                salarie.avlog = d["AVLOG"];
                salarie.av_nour = d["AV NOUR"]; 
                salarie.prim_impo = d["PRIM IMPO"]; 
                salarie.brut_conge = d["BRUT CONGE"]; 
                salarie.total_20_a_24 = d["TOTAL 20 à 24"]; 
                salarie.tcs = nb(d["TCS"]); 
                salarie.irpp = nb(d["IRPP"]+''); 
                salarie.fnh = nb(d["FNH"]+''); 
                salarie.cfp = nb(d["CFP"]+''); 
                salarie.total_26_a_29 = nb(d["TOTAL26 à 29"]); 
                salarie.ind_nonimpo = d["IND NON IMPO"];

                this.salaries.push(salarie);
            })

            
            this.close();
        };
        fileReader.readAsArrayBuffer(this.file);
    }
}
