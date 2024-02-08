import axios from 'axios';

export default {
  
  async createUser(data) {
    await axios.post('/create', data);
  },
  async forgotPassword(data) {
    await axios.post('/forgotPassword', data);
  },
};