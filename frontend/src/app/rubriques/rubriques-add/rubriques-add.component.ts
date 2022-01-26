import { Component, Input, OnInit } from '@angular/core';
import { NgbActiveModal, NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { ToastrManager } from 'ng6-toastr-notifications';

@Component({
  selector: 'app-rubriques-add',
  templateUrl: './rubriques-add.component.html',
  styleUrls: ['./rubriques-add.component.scss']
})
export class RubriquesAddComponent implements OnInit {
  @Input() name;
  constructor(public modal: NgbActiveModal,public toastr: ToastrManager) { }

  ngOnInit(): void {
  }

  close(){
    this.modal.close();
    this.toastr.warningToastr('This is warning toast.', 'Alert!',{animate:'fade'});
  }

}
