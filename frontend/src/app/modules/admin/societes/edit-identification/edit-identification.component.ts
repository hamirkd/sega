import { Component, Input, OnInit } from '@angular/core'; 
import { MatDialogRef } from '@angular/material/dialog';

@Component({
  selector: 'app-edit-identification',
  templateUrl: './edit-identification.component.html',
  styleUrls: ['./edit-identification.component.scss']
})
export class EditIdentificationComponent implements OnInit {

  @Input() name;
  constructor(public matDialogRef: MatDialogRef<EditIdentificationComponent> ) { }

  ngOnInit(): void {
  }
 
  close(){}
}
