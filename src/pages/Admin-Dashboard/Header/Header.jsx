import './header.css'
import smctilogo from '../../../img/smctilogo.png'
import notifbell from '../../../img/Notification.svg'
import searchicon from '../../../img/iconsearch.svg'
import profilepic from '../../../img/TestAccount.svg'

function Header() {
    return (
<div className='body'>
  <div className="wrapper">
    <form>
      <div className="logo">
      <img className='logosmc' src={smctilogo} alt="" width="70" />
        <h1>
          SMCTI
          <br />
          CLINIC
        </h1>
        <div className="search-bar">
          <input type="text" placeholder="Search..." />
          <img className="searchbutton" src={searchicon} width="30"/>
        </div>

        <div className="Date">
          <div className="date">
            <p>10:50 AM Today, 28 May 2020</p>
          </div>
                <div className="bell">
                  <img className="iconbell" src={notifbell} alt="" width="80" />
                </div>
                <div className="account">
                  <p>Maam Nurse</p>
                  <div className="Admin">
                    <p>Admin</p>
                  </div>
                </div>
                <div className="circle">
                  <img src={profilepic} alt="Profile Image" />
                </div>
        </div>
      </div>
    </form>
  </div>

  <div className='menucontainer'>
    <div className="menu">
      <ul className='menutextbuttons'>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Student</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Reports</a></li>
      </ul>
    </div>
  </div>
</div>

    )
  }
  
  export default Header;