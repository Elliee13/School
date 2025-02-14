import './walkinpatients.css'
import checklogo from '../../../img/checklogo.svg'
import studicon from '../../../img/usericon.svg'
import infoicon from '../../../img/infocircle.svg'



function WalkinPatients() { 
  const WIPpatientData = [
    { studname: "Zamaki Travilla", wipdate: "Aug 23 2024 11:00 AM"},
    { studname: "John Benignit", wipdate: "Aug 23 2024 11:00 AM"},
    { studname: "Jessa Mae", wipdate: "Aug 23 2024 11:00 AM"}
  ];

    return (
      
      <div className='WIPcontainer'>
        <div className='WIPtoptextcontainer'>
            <img className="checkicon" src={checklogo} alt="" width={50} height={50}/>
                <div className='WIPtext'>
                    <p>Walk In Patients</p>
                </div>
            <div className='WIPseemore'>
                    <p>See More</p>
            </div>
        </div>

        {WIPpatientData.map((wiprow, wipindex) => (
              <WIPbar
                key={wipindex}
                studname={wiprow.studname}
                wipdate={wiprow.wipdate}
              />
            ))}

      </div>

            
    )
  }
  

  function WIPbar({ studname, wipdate}) {
    return (
          <div className='WIP1st'>
            <img className="studlogo" src={studicon} alt="" width={35} height={50}/>
            <div className='WIPstudtext'>
                <h4>{studname}</h4>
                <p>{wipdate}</p>
            </div>
            <img className="infologo" src={infoicon} alt="" width={30} height={50}/>
          </div>
    );
  }


  export default WalkinPatients;