import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-edit-identification2',
  templateUrl: './edit-identification2.component.html',
  styleUrls: ['./edit-identification2.component.scss']
})
export class EditIdentification2Component implements OnInit {
  @Input('isEdit') _d;
  constructor() { }

  ngOnInit(): void {
  }

  save(){
    console.log(this._d);
    this._d.isEdit = false;
  }
  close(){
    this._d.isEdit = false;
  }

}
