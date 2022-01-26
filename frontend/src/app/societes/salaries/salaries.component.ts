import { Component, OnInit } from '@angular/core';
import { NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { ParticipantAddComponent } from 'src/app/participant/participant-add/participant-add.component';

@Component({
  selector: 'app-salaries',
  templateUrl: './salaries.component.html',
  styleUrls: ['./salaries.component.scss']
})
export class SalariesComponent implements OnInit {

  constructor(private modalService: NgbModal){

  }
  ngOnInit(): void {
      
  }

  listes = [
    {
      id:1,
      img:'assets/images/faces/face1.jpg',
      nom:'David',
      prenom:'Grey',
      status:'DONE',
      lastUpdate:'13/01/2021'
    },
    {
      id:2,
      img:'assets/images/faces/face2.jpg',
      nom:'Stella',
      prenom:'Johnson',
      status:'PROGRESS',
      lastUpdate:'15/08/2021'
    },
    {
      id:3,
      img:'assets/images/faces/face3.jpg',
      nom:'Marina',
      prenom:'Michel',
      status:'ON HOLD',
      lastUpdate:'04/05/2021'
    },
    {
      id:4,
      img:'assets/images/faces/face4.jpg',
      nom:'John',
      prenom:'Doe',
      status:'REJECTED',
      lastUpdate:'21/06/2021'
    },
  ]

  
  add( ) {
    const modalRef = this.modalService.open(ParticipantAddComponent, { size : 'lg' });
    modalRef.componentInstance.name = 'Ajouter';
  }
  edit( ) {
    const modalRef = this.modalService.open( ParticipantAddComponent, { size : 'lg' });
    modalRef.componentInstance.name = 'Modifier ';
  }
  delete( smallModalContent ) {
    this.modalService.open( smallModalContent, { size : 'sm',centered:true } );
  }
}
