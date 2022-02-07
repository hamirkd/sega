import { ChangeDetectionStrategy, ChangeDetectorRef, Component, OnDestroy, OnInit, ViewEncapsulation } from '@angular/core';
import { AvailableLangs, TranslocoService } from '@ngneat/transloco';
import { FuseNavigationService } from '@fuse/components/navigation';
import { Societe } from 'app/models/societe.model';
import { SocieteService } from 'app/core/services/societe.service';
import { LayoutComponent } from 'app/layout/layout.component';
import { Router } from '@angular/router';

@Component({
    selector       : 'societes',
    templateUrl    : './societes.component.html',
    encapsulation  : ViewEncapsulation.None,
    changeDetection: ChangeDetectionStrategy.OnPush,
    exportAs       : 'societes'
})
export class SocietesComponent implements OnInit, OnDestroy
{
    availableLangs: AvailableLangs;
    activeLang: string;
    listeSocietes : Societe[]=[];
    societeActive:Societe=new Societe({});

    /**
     * Constructor
     */
    constructor( 
        private _translocoService: TranslocoService,
        private _societeService:SocieteService,
        private _fuseNavigationService: FuseNavigationService,
        private router:Router
    )
    {
    }

    // -----------------------------------------------------------------------------------------------------
    // @ Lifecycle hooks
    // @ Lifecycle hooks
    // -----------------------------------------------------------------------------------------------------

    /**
     * On init
     */
    ngOnInit(): void
    {
        this.listeSocietes = this._societeService.getAll();
        
        this.societeActive = this._societeService.activeSociete;
    }

    /**
     * On destroy
     */
    ngOnDestroy(): void
    {
    }

    // -----------------------------------------------------------------------------------------------------
    // @ Public methods
    // -----------------------------------------------------------------------------------------------------

    /**
     * Set the active lang
     *
     * @param societe
     */
    setActiveSociete(societe: Societe): void
    {
        // Set the active lang
        this._societeService.activeSociete = societe
        this.societeActive = societe;
        this._updateNavigation();
    }

    /**
     * Track by function for ngFor loops
     *
     * @param index
     * @param item
     */
    trackByFn(index: number, item: any): any
    {
        return item.id || index;
    }

    private _updateNavigation(): void
    {
        
        // const navComponent = this._fuseNavigationService.getComponent<LayoutComponent>('mainContent');
        // console.log(this._fuseNavigationService.getAll())

        // if ( !navComponent )
        // {
        //     return null;
        // }
        // navComponent.refresh();
        const lastLink = this.router.url;
        this.router.navigateByUrl('/signed-in-redirect').then(() => {
            this.router.navigate([lastLink]);
        }); 
           
    }
}
