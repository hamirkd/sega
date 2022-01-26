import { Component, Input, OnInit } from '@angular/core';
import { NgbActiveModal } from '@ng-bootstrap/ng-bootstrap';
import { ToastrManager } from 'ng6-toastr-notifications';

@Component({
  selector: 'app-edit-identification',
  templateUrl: './edit-identification.component.html',
  styleUrls: ['./edit-identification.component.scss']
})
export class EditIdentificationComponent implements OnInit {

  @Input() name;
  constructor(public modal: NgbActiveModal,public toastr: ToastrManager) { }

  ngOnInit(): void {
  }

  close(){
    this.modal.close();
  }

}
