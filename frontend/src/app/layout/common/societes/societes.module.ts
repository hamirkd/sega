import { NgModule } from '@angular/core';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { MatMenuModule } from '@angular/material/menu';
import { SocietesComponent } from 'app/layout/common/societes/societes.component';
import { SharedModule } from 'app/shared/shared.module';

@NgModule({
    declarations: [
        SocietesComponent
    ],
    imports     : [
        MatButtonModule,
        MatIconModule,
        MatMenuModule,
        SharedModule
    ],
    exports     : [
        SocietesComponent
    ]
})
export class SocietesModule
{
}
