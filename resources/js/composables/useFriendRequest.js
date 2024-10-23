import { Inertia } from "@inertiajs/inertia";

export function useFriendRequest() {
    const acceptFriendRequest = (friend_id, status) => {
        Inertia.post("/friend-request/accept", {
            friend_id: friend_id,
            status: status,
        });
    };
    const sendToFriendRequest = (friend_id) => {
        Inertia.post(`/friend-request/send/${friend_id}`);
    };

    return {
        acceptFriendRequest,
        sendToFriendRequest
    };
}
