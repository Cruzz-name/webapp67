/* ไม่สามารถลบเครื่องหมายออกได้ */
const digitize = n => [...`${n}`].map(i => parseInt(i));
console.log(digitize(-123))

/* สามารถลบเครื่องหมายออกได้ด้วย Math.abs() */
const digitize_Name = n => [...(Math.abs(n)).toString()].map(n => parseInt(n));
console.log(digitize_Name(-2163))