import { Component, OnInit } from '@angular/core';
import { FormGroup } from '@angular/forms';
import { MatDialog } from '@angular/material/dialog';
import { ActivatedRoute } from '@angular/router';
import { SocieteService } from 'app/core/services/societe.service';
import { Societe } from 'app/models/societe.model';
import { AddComponent } from '../add/add.component';
import { AddComponent as AddLocalisationComponent } from '../add-localisation/add.component';
import { EditIdentificationComponent } from '../edit-identification/edit-identification.component';
import { _DATA_SOCIETE } from '../list/_data';

@Component({
    selector: 'app-show',
    templateUrl: './show.component.html',
    styleUrls: ['./show.component.scss'],
})
export class ShowComponent implements OnInit {
    _d = { isEdit: false };
    dialogRef: any;
    constructor(
        private _matDialog: MatDialog,
        private societeService: SocieteService,
        private route: ActivatedRoute
    ) {
        this.route.params.subscribe((params) => {
            console.log(params);
            if (params['id']) {
                this.societeService.get(params['id']).subscribe((data) => {
                    this.data = data;
                });
            }
        });
    }
    data: Societe = new Societe({});

    ngOnInit(): void {}

    edit() {
        this.dialogRef = this._matDialog.open(AddComponent, {
            data: {
                societe: this.data,
                action: 'edit',
            },
        });

        this.dialogRef.afterClosed().subscribe((response: FormGroup) => {
            if (!response) {
                return;
            }
            const s = new Societe(this.data);
            s.copy(response.getRawValue());
            // this.societeService.update(s).subscribe(data=>{
            //   console.log(data);
            // })
        });
    }

    editLocalisation() {
        this.dialogRef = this._matDialog.open(AddLocalisationComponent, {
            data: {
                societe: this.data,
                action: 'edit',
            },
        });
        this.dialogRef.afterClosed().subscribe((response: FormGroup) => {
            if (!response) {
                return;
            }
            const s = new Societe(this.data);
            s.copy(response.getRawValue());
            // this.societeService.update(s).subscribe(data=>{
            //   console.log(data);
            // })
        });
    }
}
