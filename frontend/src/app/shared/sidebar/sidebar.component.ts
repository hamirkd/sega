import { Component, OnInit } from '@angular/core';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.scss']
})
export class SidebarComponent implements OnInit {
  public uiBasicCollapsed = false;
  public samplePagesCollapsed = false;
  
  public show = true;
  full_name = '';
  
  constructor(private userService:UserService) {
    this.full_name = this.userService.userData.last_name + ' '+ this.userService.userData.first_name; }

  ngOnInit() {
    const body = document.querySelector('body');

    // add class 'hover-open' to sidebar navitem while hover in sidebar-icon-only menu
    document.querySelectorAll('.sidebar .nav-item').forEach(function (el) {
      el.addEventListener('mouseover', function() {
        if(body.classList.contains('sidebar-icon-only')) {
          el.classList.add('hover-open');
        }
      });
      el.addEventListener('mouseout', function() {
        if(body.classList.contains('sidebar-icon-only')) {
          el.classList.remove('hover-open');
        }
      });
    });
  }

}
