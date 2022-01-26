import { Component, Input, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { NgbActiveModal, NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { ToastrManager } from 'ng6-toastr-notifications';

@Component({
  selector: 'app-participant-add',
  templateUrl: './add.component.html',
  styleUrls: ['./add.component.scss']
})
export class AddComponent implements OnInit {
  @Input() name;
  // code;regime;raison_sociale;sigle;rccm;cnss;contribuable;statistique;activite;date_creation;date_mise_service;date_effet;date_immatriculation;adresse;code_postal;ville;telephone;fax;email;nif;  constructor(public modal: NgbActiveModal,public toastr: ToastrManager) { 

  constructor(public modal: NgbActiveModal,public toastr: ToastrManager) { 
    
  }
  societeForm = new FormGroup({
    code: new FormControl(''),
    regime: new FormControl(''),
    raison_sociale: new FormControl(''),
    sigle: new FormControl(''),
    rccm: new FormControl(''),
    cnss: new FormControl(''),
    contribuable: new FormControl(''),
    statistique: new FormControl(''),
    activite: new FormControl(''),
    date_creation: new FormControl(''),
    date_mise_service: new FormControl(''),
    date_effet: new FormControl(''),
    date_immatriculation: new FormControl(''),
    adresse: new FormControl(''),
    code_postal: new FormControl(''),
    ville: new FormControl(''),
    telephone: new FormControl(''),
    fax: new FormControl(''),
    email: new FormControl(''),
    nif: new FormControl(''),
  });

  ngOnInit(): void {
  }

  close(){
    this.modal.close();
    this.toastr.warningToastr('This is warning toast.', 'Alert!',{animate:'fade'});
  }

  onSubmit(){
    
  }

}
