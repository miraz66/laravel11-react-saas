import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import TextInput from "@/Components/TextInput";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm } from "@inertiajs/react";
import Feature from "@/Components/Feature";

export default function Index({ feature, answer }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        number1: "",
        number2: "",
    });

    const submit = (e) => {
        e.preventDefault();

        post(route("features", feature.id));
    };
}
