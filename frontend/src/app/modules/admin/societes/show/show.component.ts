import { Component, OnInit } from '@angular/core';
 import { EditIdentificationComponent } from '../edit-identification/edit-identification.component';
import { _DATA_SOCIETE } from '../list/_data';

@Component({
  selector: 'app-show',
  templateUrl: './show.component.html',
  styleUrls: ['./show.component.scss']
})
export class ShowComponent implements OnInit {
   
  _d = {isEdit:false};
  constructor( ) { }
  data = _DATA_SOCIETE[0];

  ngOnInit(): void {
  }
   

}
