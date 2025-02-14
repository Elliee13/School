import './total.css'
import TotalIcon from '../../../img/bxs-group.svg'

function Total() {
    return (
      <div className='containertotal'>
        <div className='containertext'>
            <img className='grouplogo' src={TotalIcon} alt="" />
            <h1 className='TP'>Total Patients</h1>
        </div>
        <div className='totalcontent'>
            <div className='containertext2'>
            <h2 className='Number'>568</h2>
            <p className='Details'>Patients has increased by 5% for this month</p>
            </div>

            <div className='totalbars'>
                    <div className='newbox1' style={{ height: '100%' }}></div>
                    <div className='newbox2' style={{ height: '50%' }}></div>
            </div>
        </div>
      </div>
    )
  }

  
  
  export default Total;