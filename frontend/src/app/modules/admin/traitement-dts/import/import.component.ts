import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { MatDialogRef } from '@angular/material/dialog';
import { SalarieComplement } from 'app/models/salarie-complement-1.model';
import { Salarie } from 'app/models/salarie.model';
import { isNumber, toNumber } from 'lodash';
import moment from 'moment';
import * as XLSX from 'xlsx';

import { NgxCsvParser } from 'ngx-csv-parser';
import { NgxCSVParserError } from 'ngx-csv-parser';

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
    header = true;

    constructor(
        public matDialogRef: MatDialogRef<ImportComponent>,private ngxCsvParser: NgxCsvParser
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

    fileChangeListener(): void {

        // Select the files from the event
    
        // Parse the file you want to select for the operation along with the configuration
        this.ngxCsvParser.parse(this.file, { header: this.header, delimiter: ';' })
          .pipe().subscribe((result: Array<any>) => {
    
            // console.log('Result', result);
            result.forEach(d=>{
                let salarie = new SalarieComplement({});
                salarie.matricule = d[0];
                salarie.nom = d["Nom"];
                salarie.prenom = d["Prénom"];
                salarie.n_cnss = d["N CNSS"];
                salarie.n_cnamgs = d["N CNAMGS"];
                salarie.tx_cnss = d["Taux CNSS"];
                salarie.tx_cnamgs = d["Taux CNAMGS"];
                
                salarie.date_embauche = d["Date d'embauche société"];
                
                salarie.date_depart = d["Date de départ société"];

                salarie.bpcnam1 = d["BPCNAM1"];
                salarie.bpcnss1 = d["BPCNSS1"];
                salarie.bdplaf1 = d["BDPLAF1"];
                salarie.njrcnam1 = d["NJRCNSS1"];
                salarie.njrcnss1 = d["NJRCNAM1"];

                salarie.bpcnam2 = d["BPCNAM2"];
                salarie.bpcnss2 = d["BPCNSS2"];
                salarie.bdplaf2 = d["BDPLAF2"];
                salarie.njrcnam2 = d["NJRCNSS2"];
                salarie.njrcnss2 = d["NJRCNAM2"];

                salarie.bpcnam3 = d["BPCNAM3"];
                salarie.bpcnss3 = d["BPCNSS3"];
                salarie.bdplaf3 = d["BDPLAF3"];
                salarie.njrcnam3 = d["NJRCNSS3"];
                salarie.njrcnss3 = d["NJRCNAM3"];


                this.salaries.push(salarie);
            });
            this.close();
            
          }, (error: NgxCSVParserError) => {
            console.log('Error', error);
          });
    
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
            dataAll.forEach(d=>{
                let salarie = new SalarieComplement({});
                salarie.matricule = d["Matricule"];
                salarie.nom = d["Nom"];
                salarie.prenom = d["Prénom"];
                salarie.n_cnss = d["N CNSS"];
                salarie.n_cnamgs = d["N CNAMGS"];
                salarie.tx_cnss = Number((d["Taux CNSS"]+'').replace(',','.'));
                salarie.tx_cnamgs = Number((d["Taux CNAMGS"]+'').replace(',','.'));

                salarie.date_embauche = d["Date d'embauche société"];
                
                salarie.date_depart = d["Date de départ société"];

                salarie.bpcnam1 = Number(d["BPCNAM1"]);
                salarie.bpcnss1 = Number(d["BPCNSS1"]);
                salarie.bdplaf1 = Number(d["BDPLAF1"]);
                salarie.njrcnam1 = Number(d["NJRCNSS1"]);
                salarie.njrcnss1 = Number(d["NJRCNAM1"]);

                salarie.bpcnam2 = Number(d["BPCNAM2"]);
                salarie.bpcnss2 = Number(d["BPCNSS2"]);
                salarie.bdplaf2 = Number(d["BDPLAF2"]);
                salarie.njrcnam2 = Number(d["NJRCNSS2"]);
                salarie.njrcnss2 = Number(d["NJRCNAM2"]);

                salarie.bpcnam3 = Number(d["BPCNAM3"]);
                salarie.bpcnss3 = Number(d["BPCNSS3"]);
                salarie.bdplaf3 = Number(d["BDPLAF3"]);
                salarie.njrcnam3 = Number(d["NJRCNSS3"]);
                salarie.njrcnss3 = Number(d["NJRCNAM3"]);


                this.salaries.push(salarie);
            })

            
            this.close();
        };
        fileReader.readAsArrayBuffer(this.file);
    }
}
