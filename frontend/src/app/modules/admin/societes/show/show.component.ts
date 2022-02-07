import { Component, OnInit } from '@angular/core';
import { FormGroup } from '@angular/forms';
import { MatDialog } from '@angular/material/dialog';
import { AddComponent } from '../add/add.component';
 import { EditIdentificationComponent } from '../edit-identification/edit-identification.component';
import { _DATA_SOCIETE } from '../list/_data';

@Component({
  selector: 'app-show',
  templateUrl: './show.component.html',
  styleUrls: ['./show.component.scss']
})
export class ShowComponent implements OnInit {
   
  _d = {isEdit:false};
  dialogRef: any;
  constructor( 
    private _matDialog: MatDialog) { }
  data = _DATA_SOCIETE[0];

  ngOnInit(): void {
  }
   
  edit(){
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
      this.data.copy(response.getRawValue())
  });
  }

}
