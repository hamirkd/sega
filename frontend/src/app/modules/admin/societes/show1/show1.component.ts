import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-show1',
  templateUrl: './show1.component.html',
  styleUrls: ['./show1.component.scss']
})
export class Show1Component implements OnInit {
  @Input('data') data;
  _d = {isEdit:false};
  
  constructor() { }

  ngOnInit(): void {
  }

}
