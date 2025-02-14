import './history.css'
import hscripticon from '../../../img/scripticon.svg'

function History() {
  const patientData = [
    { nurse: "Benom RubyJane", patient: "Dayana Silang", date: "08/21/2024", illness: "Fever", status: "Severe" },
    { nurse: "John Benignit", patient: "John Lemon", date: "08/18/2024", illness: "Fever", status: "Pending" },
    { nurse: "Carl Waje", patient: "Emily Clark", date: "08/16/2024", illness: "Fever", status: "Complete" },
    { nurse: "Mona Rose", patient: "Anna Cruz", date: "08/15/2024", illness: "Fever", status: "Pending" },
    { nurse: "David Brown", patient: "Merry Si", date: "08/14/2024", illness: "Cancer", status: "Complete" },
    { nurse: "Charls John T. Tinapay", patient: "Sophia Elizabeth Crizelda  ", date: "08/13/2024", illness: "Fever", status: "Pending" }
  ];

  return (
    <div className='historycontainer'>

      <div className='historytoptextcontainer'>
        <img className='hscriptlogo' src={hscripticon} alt="" />
        <div className='PHtext'>
          <p>Patient History</p>
          <p className='PORtext'>Patients Overview Recently</p>
        </div>

        <div className='historyseemore'>
          <p>See More</p>
        </div>

      </div>

      <div className='historydatacontainer'>
        <table className='historydata'>

          <thead>
            <tr className='historylabels'>
              <th className='ANlabel'>Assigned Nurse</th>
              <th className='patientlabel'>Patient</th>
              <th className='hdateslabel'>Date</th>
              <th className='Illnesslabel'>Illness</th>
              <th className='Statuslabel'>Status</th>
            </tr>
          </thead>

          <tbody>
            {patientData.map((row, index) => (
              <Row
                key={index}
                nurse={row.nurse}
                patient={row.patient}
                date={row.date}
                illness={row.illness}
                status={row.status}
              />
            ))}
          </tbody>

        </table>
      </div>

    </div>
  );
}

function Row({ nurse, patient, date, illness, status }) {
  return (
        <tr className='hrow'>
          <td className='tnurse'>{nurse}</td>
          <td className='tpatient'>{patient}</td>
          <td className='tdate'>{date}</td>
          <td className='tillness'>{illness}</td>
          <td className='tstatus'>{status}</td>
        </tr>
  );
}

export default History;
