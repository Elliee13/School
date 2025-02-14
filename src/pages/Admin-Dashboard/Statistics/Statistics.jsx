import './statistics.css'
import statslogo from '../../../img/Analytics.svg'

function Statistics() {
    return (
        <div className='statisticscontainer'>
            <div className='statstoptextcontainer'>
                <img className="statsicon" src={statslogo} alt="" width={50} height={50}/>
                <div className='statstext'>
                    <p>Statistics</p>
                    <p className='statstextdetails'>Monthly Statistics For Patients</p>
                </div>
                <div className='statsseemore'>
                    <p>See More</p>
                </div>
            </div>
    
<div className='allgraph'>
    <div className='entiregraph'>
        <div className='uppergraph'>

            <div className='y-numbers'>
                <p>50</p>
                <p>40</p>
                <p>30</p>
                <p>20</p>
                <p>0</p>
            </div>

            <div className="graphcontainer">
                <div className="dbbar" style={{ height: '100%' }}>
                    <div className="lbbar" style={{ height: '70%' }}></div>
                </div>
                <div className="dbbar" style={{ height: '70%' }}>
                    <div className="lbbar" style={{ height: '35%' }}></div>
                </div>
                <div className="dbbar" style={{ height: '65%' }}>
                    <div className="lbbar" style={{ height: '45%' }}></div>
                </div>
                <div className="dbbar" style={{ height: '30%' }}>
                    <div className="lbbar" style={{ height: '35%' }}></div>
                </div>
                <div className="dbbar" style={{ height: '45%' }}>
                    <div className="lbbar" style={{ height: '30%' }}></div>
                </div>
                <div className="dbbar" style={{ height: '25%' }}>
                    <div className="lbbar" style={{ height: '50%' }}></div>
                </div>
                <div className="dbbar" style={{ height: '15%' }}>
                    <div className="lbbar" style={{ height: '30%' }}></div>
                </div>
            </div>
        </div>

        <div className='x-numbers'>
                <p>Jun</p>
                <p>Jul</p>
                <p>Aug</p>
                <p>Sep</p>
                <p>Oct</p>
                <p>Nov</p>
                <p>Dec</p>

        </div>
    </div>

        <div className="circle-text-container">

        <div className='rightstatcontent'>
            <div className='tpcircle'>
                <div className="statscircle"></div>
                <span className="statscircletext">Total Patients</span>
            </div>

            <div className='twicircle'>
                <div className="statscircle2"></div>
                <span className="statscircletext2">Total Walk Ins</span>
            </div>

        </div>

        </div>

    </div>

        </div>
    );
}

export default Statistics;
