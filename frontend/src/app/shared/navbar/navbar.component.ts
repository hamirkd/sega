import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NgbDropdownConfig } from '@ng-bootstrap/ng-bootstrap';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss'],
  providers: [NgbDropdownConfig]
})
export class NavbarComponent implements OnInit {
  public iconOnlyToggled = false;
  public sidebarToggled = false;
  full_name = '';
  
  constructor(config: NgbDropdownConfig,public router:Router,private userService:UserService) {
    config.placement = 'bottom-left';
    this.full_name = this.userService.userData.last_name + ' '+ this.userService.userData.first_name;
  }

  ngOnInit() {
  }
  loginOut(){
    localStorage.removeItem("token");
    localStorage.removeItem("user_access");
    this.router.navigate(['user-pages/login']);
  }

  // toggle sidebar in small devices
  toggleOffcanvas() {
    document.querySelector('.sidebar-offcanvas').classList.toggle('active');
  }

  // toggle sidebar
  toggleSidebar() {
    let body = document.querySelector('body');
    if((!body.classList.contains('sidebar-toggle-display')) && (!body.classList.contains('sidebar-absolute'))) {
      this.iconOnlyToggled = !this.iconOnlyToggled;
      if(this.iconOnlyToggled) {
        body.classList.add('sidebar-icon-only');
      } else {
        body.classList.remove('sidebar-icon-only');
      }
    } else {
      this.sidebarToggled = !this.sidebarToggled;
      if(this.sidebarToggled) {
        body.classList.add('sidebar-hidden');
      } else {
        body.classList.remove('sidebar-hidden');
      }
    }
  }

  // toggle right sidebar
  // toggleRightSidebar() {
  //   document.querySelector('#right-sidebar').classList.toggle('open');
  // }

}
