import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ParticipantComponent } from './participant.component';
import { ListComponent } from './list/list.component';
import { RouterModule, Routes } from '@angular/router';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { ParticipantAddComponent } from './participant-add/participant-add.component';

const routes: Routes = [
  { path: '', component: ListComponent },
];

@NgModule({
  declarations: [ParticipantComponent, ListComponent, ParticipantAddComponent],
  imports: [
    CommonModule,
    NgbModule,
    RouterModule.forChild(routes),
  ]
})
export class ParticipantModule { }
