//Matricule	NIF	Nom	Prénom	Emploi	Niveau	Nationalité	Age	Sexe	Enfants	Téléphone	Code postal	Ville	Emploi occupé	Situation familiale	DEB10	DEB11	FIN12	FIN13DAS
//BRUT	AVLOG	AV NOUR	PRIM IMPO	BRUT CONGE	TOTAL 20 à 24	TCS	IRPP	FNH	CFP	TOTAL26 à 29	IND NON IMPO

import { Salarie } from './salarie.model';

export class SalarieComplement extends Salarie {
    id?: number;
    brute: string;
    avlog: string;
    av_nour: string;
    prim_impo: string;
    brut_conge: number;
    total_20_a_24: string;
    tcs: string;
    irpp: string;
    fnh: string;
    cfp: string;
    total_26_a_29: string;
    ind_non_impo: string;

    brut_presence: number;
    av_eau_elec: number;
    av_nourriture: number;
    ind_impo: number;
    ind_nonimpo: number;

    alloc_familiale: number;
    autre_deduc: number;
    avance: number;
    numero_dts: number;
    reste: number;

    n_cnss: string;
    n_cnamgs: string;
    date_embauche: string;
    date_depart: string;
    tx_cnamgs: string;
    tx_cnss: string;

    bpcnss1:string;
    bpcnam1:string;
    bdplaf1:string;
    njrcnss1:string;
    njrcnam1:string;

    bpcnss2:string;
    bpcnam2:string;
    bdplaf2:string;
    njrcnss2:string;
    njrcnam2:string;
    
    bpcnss3:string;
    bpcnam3:string;
    bdplaf3:string;
    njrcnss3:string;
    njrcnam3:string;
    code_etablissement:string;

    constructor(salarie: any) {
        super(salarie);
        this.brute = salarie.brute;
        this.avlog = salarie.avlog;
        this.av_nour = salarie.av_nour;
        this.prim_impo = salarie.prim_impo;
        this.brut_conge = salarie.brut_conge;
        this.total_20_a_24 = salarie.total_20_a_24;
        this.tcs = salarie.tcs;
        this.irpp = salarie.irpp;
        this.fnh = salarie.fnh;
        this.cfp = salarie.cfp;
        this.total_26_a_29 = salarie.total_26_a_29;
        this.ind_non_impo = salarie.ind_non_impo;
        this.n_cnss = salarie.n_cnss;
        this.n_cnamgs = salarie.n_cnamgs;
        this.date_embauche = salarie.date_embauche;
        this.date_depart = salarie.date_depart;
        this.tx_cnamgs = salarie.tx_cnamgs;
        this.tx_cnss = salarie.tx_cnss;


        this.bpcnss1 = salarie.bdplaf1;
        this.bpcnam1 = salarie.bpcnam1;
        this.bdplaf1 = salarie.bdplaf1;
        this.njrcnss1 = salarie.njrcnss1;
        this.njrcnam1 = salarie.njrcnam1;
        
        this.bpcnss2 = salarie.bdplaf2;
        this.bpcnam2 = salarie.bpcnam2;
        this.bdplaf2 = salarie.bdplaf2;
        this.njrcnss2 = salarie.njrcnss2;
        this.njrcnam2 = salarie.njrcnam2;
        
        this.bpcnss3 = salarie.bdplaf3;
        this.bpcnam3 = salarie.bpcnam3;
        this.bdplaf3 = salarie.bdplaf3;
        this.njrcnss3 = salarie.njrcnss3;
        this.njrcnam3 = salarie.njrcnam3;

        this.code_etablissement = salarie.code_etablissement;
    }
    copy?(salarie: any) {
        this.societe = salarie.societe;
        this.societe_id = salarie.societe_id;
        this.matricule = salarie.matricule;
        this.nif = salarie.nif;
        this.nom = salarie.nom;
        this.prenom = salarie.prenom;
        this.emploi = salarie.emploi;
        this.niveau = salarie.niveau;
        this.nationalite = salarie.nationalite;
        this.age = salarie.age;
        this.sexe = salarie.sexe;
        this.enfants = salarie.enfants;
        this.telephone = salarie.telephone;
        this.code_postal = salarie.code_postal;
        this.ville = salarie.ville;
        this.emploi_occupe = salarie.emploi_occupe;
        this.situation_familiale = salarie.situation_familiale;
        this.deb10 = salarie.deb10;
        this.deb11 = salarie.deb11;
        this.fin12 = salarie.fin12;
        this.fin13das = salarie.fin13das;
        this.brute = salarie.brute;
        this.avlog = salarie.avlog;
        this.av_nour = salarie.av_nour;
        this.prim_impo = salarie.prim_impo;
        this.brut_conge = salarie.brut_conge;
        this.total_20_a_24 = salarie.total_20_a_24;
        this.tcs = salarie.tcs;
        this.irpp = salarie.irpp;
        this.fnh = salarie.fnh;
        this.cfp = salarie.cfp;
        this.total_26_a_29 = salarie.total_26_a_29;
        this.ind_non_impo = salarie.ind_non_impo;
        this.n_cnss = salarie.n_cnss;
        this.n_cnamgs = salarie.n_cnamgs;
        this.date_embauche = salarie.date_embauche;
        this.date_depart = salarie.date_depart;
        this.tx_cnamgs = salarie.tx_cnamgs;
        this.tx_cnss = salarie.tx_cnss;

        this.bpcnss1 = salarie.bdplaf1;
        this.bpcnam1 = salarie.bpcnam1;
        this.bdplaf1 = salarie.bdplaf1;
        this.njrcnss1 = salarie.njrcnss1;
        this.njrcnam1 = salarie.njrcnam1;
        
        this.bpcnss2 = salarie.bdplaf2;
        this.bpcnam2 = salarie.bpcnam2;
        this.bdplaf2 = salarie.bdplaf2;
        this.njrcnss2 = salarie.njrcnss2;
        this.njrcnam2 = salarie.njrcnam2;
        
        this.bpcnss3 = salarie.bdplaf3;
        this.bpcnam3 = salarie.bpcnam3;
        this.bdplaf3 = salarie.bdplaf3;
        this.njrcnss3 = salarie.njrcnss3;
        this.njrcnam3 = salarie.njrcnam3;

        this.code_etablissement = salarie.code_etablissement;

        
    }
}
