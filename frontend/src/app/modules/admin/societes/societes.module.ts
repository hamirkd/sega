import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ParticipantComponent } from './societes.component';
import { ListComponent } from './list/list.component';
import { ListComponent as ListSalariesComponent } from './list-salaries/list.component';
import { RouterModule, Routes } from '@angular/router';
import { AddComponent } from './add/add.component';
import { ShowComponent } from './show/show.component';
import { EditIdentificationComponent } from './edit-identification/edit-identification.component';
import { EditIdentification2Component } from './edit-identification2/edit-identification2.component';
import { Show1Component } from './show1/show1.component';
import { SalariesComponent } from './salaries/salaries.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { MatButtonModule } from '@angular/material/button';
import { MatButtonToggleModule } from '@angular/material/button-toggle';
import { MatDividerModule } from '@angular/material/divider';
import { MatIconModule } from '@angular/material/icon';
import { MatMenuModule } from '@angular/material/menu';
import { MatProgressBarModule } from '@angular/material/progress-bar';
import { MatSortModule } from '@angular/material/sort';
import { MatTableModule } from '@angular/material/table';
import { MatTooltipModule } from '@angular/material/tooltip';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatCheckboxModule } from '@angular/material/checkbox';
import { MatDatepickerModule } from '@angular/material/datepicker';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatAutocompleteModule } from '@angular/material/autocomplete';
import { MatInputModule } from '@angular/material/input';
import { MatOptionModule, MatRippleModule } from '@angular/material/core';
import { MatSelectModule } from '@angular/material/select';
import { MatTabsModule } from '@angular/material/tabs';
import { MatDialogModule } from '@angular/material/dialog';
import { FuseCardModule } from '@fuse/components/card';

const routes: Routes = [
    { path: '', component: ListComponent },
    { path: ':id/salaries', component: ListSalariesComponent },
    { path: 'add', component: AddComponent },
    { path: ':id', component: ShowComponent },
];

@NgModule({
    declarations: [
        ParticipantComponent,
        ListComponent,
        AddComponent,
        ShowComponent,
        EditIdentificationComponent,
        EditIdentification2Component,
        Show1Component,
        SalariesComponent,ListSalariesComponent
    ],
    imports: [
        CommonModule,
        RouterModule.forChild(routes),
        FormsModule,
        ReactiveFormsModule,
        MatTableModule,
        MatButtonModule,
        MatButtonToggleModule,
        MatDividerModule,
        MatIconModule,
        MatMenuModule,
        MatProgressBarModule,
        MatSortModule,
        MatTableModule,
        MatTooltipModule,
        MatIconModule,
        MatMenuModule,
        MatTableModule,
        MatToolbarModule,
        FuseCardModule,
        MatTableModule,
        MatButtonModule,
        MatCheckboxModule,
        MatDatepickerModule,
        MatFormFieldModule,
        MatAutocompleteModule, 
        MatIconModule,
        MatInputModule,
        MatMenuModule,
        MatDialogModule,
        MatRippleModule,
        MatTableModule,
        MatToolbarModule,
        MatOptionModule,
        MatSelectModule,
        MatTableModule,
        MatTabsModule,
        MatAutocompleteModule,
    ],
})
export class SocietesModule {}
