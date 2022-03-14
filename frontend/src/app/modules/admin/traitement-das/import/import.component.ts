import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { MatDialogRef } from '@angular/material/dialog';
import { f_convert_to_number, f_convert_to_number_tostring } from 'app/core/services/function';
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
                raw: false,
            });
            // Nous allons relie les colonnes de la table excel 
            console.log(dataAll)
            dataAll.forEach(d=>{
                let salarie = new SalarieComplement({});
                salarie.matricule = d["Matricule"];
                salarie.n_statistique = d["N°STATISTIQUE"];
                salarie.nif = d["NIF"];
                salarie.nom = d["NOMS"];
                salarie.prenom = d["PRENOMS"];
                salarie.emploi = d["CODE EMPLOI"];
                salarie.niveau = d["CODE NIVEAU"];
                salarie.nationalite = d["CODE NATIONALITE"];
                salarie.age = d["AGE"];
                salarie.sexe = d["SEXE"];
                salarie.situation_familiale = d["SITUATION FAMILIALE"];
                salarie.enfants = d["ENFANTS"];
                salarie.telephone = d["TELEPHONE"];
                salarie.code_postal = d["BOITE POSTAL"];
                salarie.ville = d["VILLE"];
                salarie.emploi_occupe = d["EMPLOI OCCUPE"];
                salarie.detail_situ_fam = d["DETAIL SITU. FAM"];
                salarie.deb10 = f_convert_to_number_tostring(d["JOUR DEBUT"]);
                salarie.deb11 = f_convert_to_number_tostring(d["MOIS DEBUT"]);
                salarie.fin12 = f_convert_to_number_tostring(d["JOUR FIN"]);
                salarie.fin13das = f_convert_to_number_tostring(d["MOIS FIN"]);
                salarie.salaire_brut = f_convert_to_number(d["SALAIRE BRUT"]);
                salarie.avlog = f_convert_to_number(d["AV LOGEMENT"]);
                salarie.av_nour = f_convert_to_number(d["AV NOURRITURE"]); 
                salarie.prim_impo = f_convert_to_number(d["PRIMRS IMPOSABLE"]); 
                salarie.brut_conge = f_convert_to_number(d["CONGES PAYES"]); 
                salarie.total_brut = f_convert_to_number(d["TOTAL BRUT"]);
                salarie.tcs = f_convert_to_number(d["TCS"]);
                salarie.irpp = f_convert_to_number(d["IRPP"]);
                salarie.fnh = f_convert_to_number(d["FNH"]);
                salarie.cfp = f_convert_to_number(d["CFP"]);
                salarie.total = f_convert_to_number(d["TOTAL"]);
                salarie.primes_non_impo = f_convert_to_number(d["PRIMES NON IMPO"]);
                this.salaries.push(salarie);
            })
            console.log(this.salaries);

            
            this.close();
        };
        fileReader.readAsArrayBuffer(this.file);
    }
}
