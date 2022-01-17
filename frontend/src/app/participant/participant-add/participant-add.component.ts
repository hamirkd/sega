import { Component, Input, OnInit } from '@angular/core';
import { NgbActiveModal, NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { ToastrManager } from 'ng6-toastr-notifications';

@Component({
  selector: 'app-participant-add',
  templateUrl: './participant-add.component.html',
  styleUrls: ['./participant-add.component.scss']
})
export class ParticipantAddComponent implements OnInit {
  @Input() name;
  constructor(public modal: NgbActiveModal,public toastr: ToastrManager) { }

  ngOnInit(): void {
  }

  close(){
    this.modal.close();
    this.toastr.warningToastr('This is warning toast.', 'Alert!',{animate:'fade'});
  }

}
