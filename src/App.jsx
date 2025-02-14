import Welcome from './Page/Admin-Dashboard/Welcome/Welcome'
import Total from './Page/Admin-Dashboard/Total/Total'
import Walkin from './Page/Admin-Dashboard/Walkin/Walkin'
import Header from './Page/Admin-Dashboard/Header/Header'
import History from './Page/Admin-Dashboard/History/History'
import Statistics from './Page/Admin-Dashboard/Statistics/Statistics'
import WalkinPatients from './Page/Admin-Dashboard/WalkinPatients/WalkinPatients'
import './App.css'


function App() {
  return (
    <>
    <div className='wholecontainer'>
      <Header />
      <div className='welcome'>
        <Welcome />
      </div>
      <div className='allcontent'>
          <div className='leftcontent'>
            <div className='TPTWI'>
                <div className='total'>
                  <Total />
                </div>
                    <div className='walkin'>
                      <Walkin />
                    </div>
            </div>

            <div className='history'>
                    <History/>
            </div>
            </div>
            <div className='rightcontent'>
                  <div className='statistics'>
                    <Statistics/>
                  </div>
                  <div className='walkinpatients'>
                    <WalkinPatients/>
                  </div>
            </div>
      </div>
    </div>
    </>
  )
}

export default App;
