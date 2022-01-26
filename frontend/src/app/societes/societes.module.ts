import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ParticipantComponent } from './societes.component';
import { ListComponent } from './list/list.component';
import { RouterModule, Routes } from '@angular/router';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { AddComponent } from './add/add.component';
import { ShowComponent } from './show/show.component';
import { EditIdentificationComponent } from './edit-identification/edit-identification.component';
import { EditIdentification2Component } from './edit-identification2/edit-identification2.component';
import { Show1Component } from './show1/show1.component';
import { SalariesComponent } from './salaries/salaries.component';

const routes: Routes = [
  { path: '', component: ListComponent },
  { path: 'add', component: AddComponent },
  { path: ':id', component: ShowComponent },
];

@NgModule({
  declarations: [ParticipantComponent, ListComponent, AddComponent, ShowComponent, EditIdentificationComponent, EditIdentification2Component, Show1Component, SalariesComponent],
  imports: [
    CommonModule,
    NgbModule,
    RouterModule.forChild(routes),
  ]
})
export class SocietesModule { }
