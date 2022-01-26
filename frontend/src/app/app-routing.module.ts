import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { AuthGuardService as AuthGuard } from './auth/auth-guard.service';
import { RoleGuardService as RoleGuard } from './auth/role-guard.service';

const routes: Routes = [
  { path: '', redirectTo: '/dashboard', pathMatch: 'full' },
  { path: 'dashboard', component: DashboardComponent,canActivate: [AuthGuard]  },
  // { 
  //   path: 'basic-ui', 
  //   loadChildren: () => import('./basic-ui/basic-ui.module').then(m => m.BasicUiModule),
  //   canActivate: [RoleGuard], 
  //   data: { 
  //     expectedRole: 'admin'
  //   } 
  // },
  { 
    path: 'basic-ui', 
    loadChildren: () => import('./basic-ui/basic-ui.module').then(m => m.BasicUiModule),
    canActivate: [AuthGuard], 
  },
  { path: 'participant', loadChildren: () => import('./participant/participant.module').then(m => m.ParticipantModule) },
  { path: 'societes', loadChildren: () => import('./societes/societes.module').then(m => m.SocietesModule) },
  { path: 'charts', loadChildren: () => import('./charts/charts.module').then(m => m.ChartsDemoModule) },
  { path: 'forms', loadChildren: () => import('./forms/form.module').then(m => m.FormModule) },
  { path: 'tables', loadChildren: () => import('./tables/tables.module').then(m => m.TablesModule) },
  { path: 'icons', loadChildren: () => import('./icons/icons.module').then(m => m.IconsModule) },
  { path: 'general-pages', loadChildren: () => import('./general-pages/general-pages.module').then(m => m.GeneralPagesModule) },
  { path: 'apps', loadChildren: () => import('./apps/apps.module').then(m => m.AppsModule) },
  { path: 'user-pages', loadChildren: () => import('./user-pages/user-pages.module').then(m => m.UserPagesModule) },
  { path: 'error-pages', loadChildren: () => import('./error-pages/error-pages.module').then(m => m.ErrorPagesModule) },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
