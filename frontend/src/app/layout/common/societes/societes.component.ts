import { ChangeDetectionStrategy, ChangeDetectorRef, Component, OnDestroy, OnInit, ViewEncapsulation } from '@angular/core';
import { AvailableLangs, TranslocoService } from '@ngneat/transloco';
import { FuseNavigationService } from '@fuse/components/navigation';
import { Societe } from 'app/models/societe.model';
import { SocieteService } from 'app/core/services/societe.service';

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
        private _societeService:SocieteService
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

}
