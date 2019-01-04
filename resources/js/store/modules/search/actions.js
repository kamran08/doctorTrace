const updateSpecialties = async (context,data) => {
					  context.commit('sSpecialties_UPDATED', data);    
};
const updateResult = async (context,data) => {
					  context.commit('sResult_UPDATED', data);    
};
const updateSLocation = async (context,data) => {
					  context.commit('sLocation_UPDATED', data);    
};



export default {
	updateSpecialties,
	updateResult,
	updateSLocation,
};
