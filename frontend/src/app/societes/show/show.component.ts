import { Component, OnInit } from '@angular/core';
import { NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { EditIdentificationComponent } from '../edit-identification/edit-identification.component';
import { _DATA_SOCIETE } from '../list/_data';

@Component({
  selector: 'app-show',
  templateUrl: './show.component.html',
  styleUrls: ['./show.component.scss']
})
export class ShowComponent implements OnInit {

  constructor(private modalService: NgbModal) { }
  data = _DATA_SOCIETE[0];

  ngOnInit(): void {
  }
  
  edit( ) {
    const modalRef = this.modalService.open( EditIdentificationComponent, { size : 'lg' });
    modalRef.componentInstance.name = 'Modifier ';
  }

}
