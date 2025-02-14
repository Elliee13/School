import './walkin.css'
import walkinicon from '../../../img/bxs-check-square.svg'

function Walkin() {
    return (
      <div className='walkincontainertotal'>
        <div className='walkincontent'>
            <div className='walkincontainertext'>
            <img className='walkinlogo' src={walkinicon} alt="" />
                <h1 className='walkintext'>Total Walk Ins</h1>
            </div>

            <div className='walkintotalcontent'>
              <div>
                <h2 className='walkinnumber'>300</h2>
                <p className='walkindetails'>Walk In Patients has increased by 5% for this month</p>
              </div>

              <div className='totalbars2'>
                    <div className='newbox3' style={{ height: '100%' }}></div>
                    <div className='newbox4' style={{ height: '50%' }}></div>
            </div>

            </div>

        </div>

      </div>
    )
  }
  
  export default Walkin;