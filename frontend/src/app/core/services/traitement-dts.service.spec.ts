import { TestBed } from '@angular/core/testing';

import { TraitementDtsService } from './traitement-dts.service';

describe('TraitementDtsService', () => {
  let service: TraitementDtsService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(TraitementDtsService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
